<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    use HasFactory;


    protected $table = 'questions';

    protected $fillable = [
        'pertanyaan'
    ];

    public function gejala()
    {
        return $this->belongsToMany(gejala::class, 'questions__gejalas');
    }
    public function post()
    {
        return $this->belongsToMany(post::class, 'questions_posts');
    }
}
