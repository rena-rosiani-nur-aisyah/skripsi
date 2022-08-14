<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ibdh extends Model
{
    use HasFactory;
    protected $table = 'ibdhs';

    protected $fillable = [
        'jenisDarah',
        'wajib',
        'mubah',
        'haram'
    ];
}
