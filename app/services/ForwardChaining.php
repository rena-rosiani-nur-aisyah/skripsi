<?php

namespace App\Services;

use App\Models\diagnosis;
use App\Models\Fact;
use App\Models\rule;
use App\Models\gejala;
use App\Models\User;
use App\Models\post;
use App\Models\question;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class ForwardChaining
{
    private $currentFacts = [];
    private $diagnosisResult = null;

    public function addFact($gejala, $jawabanUser)
    {
        if (is_array($gejala)) {
            $gejalaId = $gejala['id'] ?? null;
        } elseif ($gejala instanceof Gejala) {
            $gejalaId = $gejala->id;
        } else {
            $gejalaId = $gejala;
        }

        if ($gejalaId !== null) {
            $this->currentFacts[$gejalaId] = [
                'gejala' => $gejala,
                'jawabanUser' => $jawabanUser
            ];
        } else {
            Log::error('Invalid gejala passed to addFact', ['gejala' => $gejala]);
        }
    }



    public function getDiagnosisResult()
    {
        return $this->diagnosisResult;
    }


    public function runForwardChaining($jawabanUser)
    {
        foreach ($this->currentFacts as $factId => $factData) {
            $gejala = $factData['gejala'];
            $userJawaban = $factData['jawabanUser'];

            $rules = Rule::where('gejala_id', $gejala->id)
                ->orWhere('signs_id', $gejala->id)
                ->get();

            foreach ($rules as $rule) {
                if ($this->checkRule($rule, $userJawaban)) {
                    $this->diagnosisResult = Post::find($rule->post_id);
                    return;
                }
            }
        }
    }


    private function checkRule($rule, $jawabanUser)
    {
        $gejalaMatch = $rule->gejala_id && $this->isFactExists($rule->gejala_id) && $jawabanUser == $rule->value;
        $signMatch = $rule->signs_id && $this->isFactExists($rule->signs_id) && $jawabanUser == $rule->value;

        return $rule->operator == 'AND' ? ($gejalaMatch && $signMatch) : ($gejalaMatch || $signMatch);
    }



    private function isFactExists($fact)
    {
        if ($fact === null) {
            Log::info('Fact is null');
            return false;
        }

        $factId = is_array($fact) ? ($fact['id'] ?? null) : (is_object($fact) ? $fact->id : $fact);

        return isset($this->currentFacts[$factId]);
    }



    public function getNextQuestion()
    {
        $factIds = array_keys($this->currentFacts);
        Log::info('Current facts', ['currentFacts' => $this->currentFacts]);

        // Prioritize questions with type 'gejala'
        $nextQuestion = Gejala::whereNotIn('id', $factIds)
            ->where('type', 'gejala')
            ->first();

        if (!$nextQuestion) {
            // If no 'gejala' questions left, get 'signs' type questions
            $nextQuestion = Gejala::whereNotIn('id', $factIds)
                ->where('type', 'signs')
                ->first();
        }

        Log::info('Next question', ['nextQuestion' => $nextQuestion]);
        return $nextQuestion;
    }
}
