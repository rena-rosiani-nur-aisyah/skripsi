<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materi extends Model
{
    use HasFactory;
    protected $table = 'materis';

    protected $fillable = [
        'jenis_darah',
        'keterangan'
    ];

    public function post()
    {
        return $this->belongsTo(post::class);
    }
}
