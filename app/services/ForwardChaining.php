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

    // public function addFact(Gejala $symptom = null, Gejala $sign = null)
    // {

    //     if ($symptom) {
    //         $this->currentFacts[] = $symptom;
    //     }
    //     if ($sign) {
    //         $this->currentFacts[] = $sign;
    //     }
    // }


    public function addFact($gejalaId, $jawabanUser)
    {
        $this->currentFacts[$gejalaId] = $jawabanUser;
    }


    // public function addFact(Gejala $fact)
    // {
    //     $this->currentFacts[] = $fact;
    //     Log::info('Fact added', ['fact' => $fact]);
    // }

    public function getDiagnosisResult()
    {
        return $this->diagnosisResult;
    }

    public function runForwardChaining($jawabanUser)
    {
        foreach ($this->currentFacts as $fact) {
            $rules = Rule::where('gejala_id', $fact->id)->orWhere('signs_id', $fact->id)->get();
            foreach ($rules as $rule) {
                if ($this->checkRule($rule, $jawabanUser)) {
                    $this->diagnosisResult = Post::find($rule->post_id);
                    return;
                }
            }
        }


        // $rules = Rule::all();

        // foreach ($rules as $rule) {
        //     $symptom = Gejala::find($rule->gejala_id);
        //     $sign = Gejala::find($rule->signs_id);

        //     if ($this->isFactExists($symptom) && $this->isFactExists($sign)) {
        //         if ($rule->operator == 'AND') {
        //             if ($jawabanUser == $rule->value && $jawabanUser == $rule->signs_value) {
        //                 $this->diagnosisResult = Post::find($rule->post_id);
        //                 break;
        //             }
        //         } elseif ($rule->operator == 'OR') {
        //             if ($jawabanUser == $rule->value || $jawabanUser == $rule->signs_value) {
        //                 $this->diagnosisResult = Post::find($rule->post_id);
        //                 break;
        //             }
        //         }
        //     }
        // }
    }

    private function checkRule($rule, $jawabanUser)
    {
        $gejalaMatch = $rule->gejala_id && $this->isFactExists($rule->gejala) && $jawabanUser == $rule->value;
        $signMatch = $rule->signs_id && $this->isFactExists($rule->signs) && $jawabanUser == $rule->value;

        return $rule->operator == 'AND' ? ($gejalaMatch && $signMatch) : ($gejalaMatch || $signMatch);
    }

    // public function runForwardChaining($jawabanUser)
    // {
    //     $rules = Rule::all();
    //     Log::info('Running Forward Chaining', ['rules' => $rules, 'jawabanUser' => $jawabanUser]);


    //     foreach ($rules as $rule) {
    //         $symptom = Gejala::find($rule->gejala_id);
    //         $sign = Gejala::find($rule->signs_id);

    //         Log::info('Checking rule', ['rule' => $rule, 'symptom' => $symptom, 'sign' => $sign]);


    //         if ($jawabanUser == $rule->value && $this->isFactExists($symptom) && $this->isFactExists($sign)) {
    //             $this->diagnosisResult = Post::find($rule->post_id);
    //             Log::info('Diagnosis result found', ['diagnosisResult' => $this->diagnosisResult]);

    //             break;
    //         }
    //     }
    // }

    private function isFactExists($fact)
    {
        if ($fact === null) {
            Log::info('Fact is null');
            return false;
        }

        foreach ($this->currentFacts as $currentFact) {
            if ($currentFact->id == $fact->id) {
                Log::info('Fact exists', ['fact' => $fact]);
                return true;
            }
        }
        Log::info('Fact does not exist', ['fact' => $fact]);
        return false;
    }


    public function getNextQuestion()
    {
        $factIds = array_map(function ($fact) {
            return $fact->id;
        }, $this->currentFacts);
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
