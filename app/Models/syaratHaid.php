<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class syaratHaid extends Model
{
    use HasFactory;
    protected $table = 'syarat_haids';

    protected $fillable = [
        'syaratHaid'
    ];
}
