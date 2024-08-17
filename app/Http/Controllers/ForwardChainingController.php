<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ForwardChainingController extends Controller
{

    public function index(Request $request)
    {
        $startstep = 1;
        $step = $request->input('step'); // Step pertanyaan
        $answer = $request->input('answer');
        $input = $request->all();
        $data = $request->input('dataq');


        $dataq = null; // Jawab
        $nextQuestion = null;
        $finalResult = null;
        $nextQuestiontmp = null;

        // Pertanyaan awal (pertanyaan dengan id 1)
        // $currentQuestion = Question::find($step);
        if (!$step) {
            $currentQuestion = DB::table('questions')->where('id', $startstep)->first();
            $nextQuestiontmp = $currentQuestion;
            $nextQuestion = $currentQuestion->pertanyaan;
            $dataq = $currentQuestion;
            $step += 1;
        }

        // dd($currentQuestion[0]->pertanyaan);

        if ($answer) {
            if ($answer == 'yes') {
                $nextQuestionText  = json_decode($request->input('dataq'))->is_yes;
            } else if ($answer == 'no') {
                $nextQuestionText  = json_decode($request->input('dataq'))->is_no;
            }
            $ceknextQuestion = DB::table('questions')->where('pertanyaan', $nextQuestionText)->first();
            // Cek apakah nextQuestion adalah pertanyaan atau hasil akhir
            if ($ceknextQuestion) {
                $step += 1;
                $nextQuestion = $ceknextQuestion->pertanyaan;
                $dataq = $ceknextQuestion;
            } else {
                $finalResult = $nextQuestionText;
            }
        }

        return view('forward_chaining', [
            'step' => $step,
            'nextQuestion' => $nextQuestion,
            'finalResult' => $finalResult,
            'dataq' => $dataq,
            'data' => $data

        ]);
    }

    public function indexdtstatic(Request $request)
    {
        // Step awal
        $step = $request->input('step', 1);
        $answer = $request->input('answer');

        $nextQuestion = '';
        $finalResult = '';

        // Forward chaining berbasis pertanyaan
        switch ($step) {
            case 1:
                $nextQuestion = 'Apakah Anda merasa demam?';
                break;
            case 2:
                if ($answer == 'yes') {
                    $nextQuestion = 'Apakah Anda merasa sakit tenggorokan?';
                } else {
                    $finalResult = 'Anda tampaknya baik-baik saja!';
                }
                break;
            case 3:
                if ($answer == 'yes') {
                    $nextQuestion = 'Apakah Anda mengalami batuk?';
                } else {
                    $finalResult = 'Mungkin Anda hanya mengalami flu ringan.';
                }
                break;
            case 4:
                if ($answer == 'yes') {
                    $finalResult = 'Kemungkinan Anda mengalami gejala COVID-19. Silakan konsultasi ke dokter!';
                } else {
                    $finalResult = 'Kemungkinan Anda mengalami flu biasa.';
                }
                break;
            default:
                $nextQuestion = 'Apakah Anda merasa demam?';
                break;
        }

        return view('forward_chaining', [
            'step' => $step,
            'nextQuestion' => $nextQuestion,
            'finalResult' => $finalResult
        ]);
    }
}
