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
}

$gejala = gejala::find(1);
$rule = $gejala->rule;
