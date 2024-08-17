<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForwardChainingController extends Controller
{
    public function index(Request $request)
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
