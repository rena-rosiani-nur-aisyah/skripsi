<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diagnosis extends Model
{
    use HasFactory;
    protected $table = 'diagnoses';

    protected $fillable = [
        'jenis_id',
        'pertanyaan_id',
        'ya',
        'tidak'
    ];

    public function post()
    {
        return $this->belongsTo(post::class);
    }

    public function question()
    {
        return $this->hasMany(question::class);
    }
}
