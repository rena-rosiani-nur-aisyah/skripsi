<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class syaratamyiz extends Model
{
    use HasFactory;

    protected $table = 'syaratamyizs';

    protected $fillable = [
        'snk_tamyiz'
    ];
}
