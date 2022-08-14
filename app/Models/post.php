<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class post extends Model
{
    use HasFactory;
    protected $table = 'posts';

    protected $fillable = [
        'name',
        'minimal',
        'maksimal',
        'rata'
    ];

    // public function diagnosis()
    // {
    //     $this->belongsTo(diagnosis::class);
    // }

    // public function ibdh()
    // {
    //     $this->belongsTo(ibdh::class);
    // }
}
