<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    use HasFactory;

    protected $table = 'artikel';

    protected $fillable = [
        'judul',
        'body',
        'excerpt',
        'image'
    ];
    // In your Article model
    protected $dates = ['created_at', 'updated_at'];
}
