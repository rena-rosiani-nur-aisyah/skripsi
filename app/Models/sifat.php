<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sifat extends Model
{
    use HasFactory;
    protected $table = 'sifats';

    protected $fillable = [
        'name',
        'ciri',
        'karakter'
    ];
}
