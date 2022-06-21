<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ibdh extends Model
{
    use HasFactory;
    protected $table = 'ibdhs';

    protected $fillable = [
        'wajib',
        'mubah',
        'haram'
    ];

    public function post()
    {
        return $this->belongsTo(post::class);
    }
}
