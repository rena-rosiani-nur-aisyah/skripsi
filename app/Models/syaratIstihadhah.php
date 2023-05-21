<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class syaratIstihadhah extends Model
{
    use HasFactory;

    protected $table = 'syarat_istihadhahs';

    protected $fillable = [
        'snk_istihadhah'
    ];
}
