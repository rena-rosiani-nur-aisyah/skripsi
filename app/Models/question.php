<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    use HasFactory;


    protected $table = 'questions';

    protected $fillable = [
        'pertanyaan',
        'is_yes',
        'is_no',
        'image'
    ];
}
