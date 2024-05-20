<?php

use App\Models\diagnosis;
use App\Models\Fact;
use App\Models\rule;
use App\Models\gejala;
use App\Models\User;
use App\Models\post;

class forwardChaining
{
    protected $rule;
    protected $jawaban;
    protected $user;
    protected $fact;

    public function __construct(array $rule, array  $jawaban, Fact $fact)
    {
        $this->rule = $rule;
        $this->jawaban = $jawaban;
        // $this->user = $user;
        $this->fact = $fact;
    }

    public function diagnosa()
    {
        $activeRules = $this->rule;

        while (count($activeRules) > 0) {
            $rule = array_shift($activeRules);

            if ($this->matchJawaban($rule)) {
                $activeRules = array_merge($activeRules, $rule->post);
            }
            if ($this->matchPost($rule)) {
                $data = [
                    'id' => $rule->post->id,
                    'name' => $rule->post->name,
                    'Penyebab' => $rule->post->Penyebab,
                    'Solusi' => $rule->post->Solusi,
                ];
                $postId = $rule->post->id;
                $fact = new Fact($data, $postId);
                return $fact;
            }
        }
        return null;
    }
    public function matchJawaban(rule $rule)
    {
        $jawabanUser = $this->jawaban[$rule->gejala->id];
        $ruleCondition = $rule->gejala->condition;

        if ($ruleCondition === '=') {
            return $jawabanUser === $this->user->value;
        } elseif ($ruleCondition === '!=') {
            return $jawabanUser !== $this->user->value;
        }
        return false;
    }
    public function matchPost(rule $rule)
    {
        return $rule->post != null && $rule->post->id != null && $rule->post->Penyebab != null && $rule->post->Solusi != null;
    }
}
