<?php

use App\Models\diagnosis;
use App\Models\Fact;
use App\Models\rule;
use App\Models\gejala;
use App\Models\User;
use App\Models\post;
use App\Models\question;
use Illuminate\Support\Facades\Validator;

class forwardChaining
{

    public function run()
    // step 1 inisialisassi sistem untuk menyimpan jawaban di array kosong
    {
        $rules = rule::all();
        $userAnswer = [];


        //step 2 membuat logika untuk pertanyaan yang akan pertama kali ditampilkan
        $firstRule = rule::where('prasyarat', null)->first();
        $firstQuestion = question::find($firstRule->related_question);

        //step 3 mengevaluasi jawaban dari user
        diagnosis::create([
            'user_id' => auth()->id(),
            'post_id' => $firstRule->post_id,
            'gejala_id' => $firstRule->gejala_id,
            'jawaban' => $userAnswer,
        ]);

        //evaluasi rules nya
        if ($firstRule->operator == 'AND') {
            //periksa jika gejala sebelumnya adalah benar semua
            $gejalaSebelumnya = diagnosis::where('user_id', auth()->id())->where(
                'post_id',
                $firstRule->post_id
            )->where(
                'gejala_id',
                '<>',
                $firstRule->gejala_id
            )->get();
            if (!$gejalaSebelumnya->every(function ($diagnosis) {
                return $diagnosis->jawaban == 'yes';
            })) {
                // Backtrack to the previous symptom
                $gejalaSebelumnya = $this->getgejalaSebelumnya($gejalaSekarang);
                if ($gejalaSebelumnya) {
                    // Reset the current symptom and rule
                    $gejalaSekarang = $gejalaSebelumnya;
                    $RuleSekarang = rule::where('gejala_id', $gejalaSebelumnya->id)->first();
                    // Go back to Step 2 and continue with the next question
                    $nextQuestion = question::find($RuleSekarang->related_question);
                } else {
                }
            } elseif ($firstRule->operator == 'OR') {
                # memeriksa jika ada gejala sebelumnya yang bernilai or juga
                $gejalaSebelumnya = diagnosis::where('user_id', auth()->id())->where(
                    'post_id',
                    $firstRule->post_id
                )->where('gejala_id', '<>', $firstRule->gejala_id)->get();
                if (!$gejalaSebelumnya->any(function ($diagnosis) {
                    return $diagnosis->jawaban == 'yes';
                })) {
                    $gejalaSebelumnya = $this->getgejalaSebelumnya($gejalaSekarang);
                    if ($gejalaSebelumnya) {
                        $gejalaSekarang = $gejalaSebelumnya;
                        $RuleSekarang = rule::where('gejala_id', $gejalaSebelumnya->id)->first();
                        $nextQuestion = question::find($RuleSekarang->related_questionn);
                    }
                }
            }
        }
        //step 4 code untuk menentukan gejala selanjutnya
        $nextRule = rule::where('prasyarat', $firstRule->gejala_id)->first();
        if ($nextRule) {
            # kembali ke step dua dan lanjut ke pertanyaan selanjutnya
            $nextQuestion = question::find($nextRule->related_question);
            # update gejala dan rule saat ini
            $gejalaSekarang = gejala::find($nextRule->gejala_id);
            $gejalaSekarang = $nextRule;
            // melanjutkan pertanyaan selanjutnya
            return $this->$this->asknextQuestion($nextQuestion, $gejalaSekarang, $RuleSekarang);
        } else {
            if ($this->isdiagnosisSelesai($gejalaSekarang)) {
                # menampilkan hasil diagnosis
                return $this->show($gejalaSekarang);
            } else {
                return "Maaf, diagnosis yang dilakukan tidak menemukan hasil apa pun.";
            }
        }
    }
}
