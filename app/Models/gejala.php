<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gejala extends Model
{
    use HasFactory;

    protected $table = 'gejalas';

    protected $fillable = [
        'gejala'
    ];

    public function rule()
    {
        return $this->belongsToMany(rule::class);
    }
    public function diagnosis()
    {
        return $this->belongsToMany(diagnosis::class, 'diagnosisGejala');
    }
    public function post()
    {
        return $this->belongsToMany(post::class, 'post_gejalas');
    }
    public function question()
    {
        return $this->belongsToMany(question::class, 'questions__gejalas');
    }
}

$gejala = gejala::find(1);
$rule = $gejala->rule;
