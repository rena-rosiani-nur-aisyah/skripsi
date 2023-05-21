<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SyaratNifas extends Model
{
    use HasFactory;

    protected $table = 'syarat_nifas';

    protected $fillable = [
        'snk_nifas'
    ];
}
