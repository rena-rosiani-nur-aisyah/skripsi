<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diagnosis extends Model
{
    use HasFactory;
    protected $table = 'diagnosis';

    protected $fillable = [
        'user_id',
        'post_id',
        'jawaban'
    ];

    public function user()
    {
        return $this->belongsTo(user::class);
    }
    public function post()
    {
        return $this->belongsToMany(post::class, 'diagnosis_posts');
    }
    public function gejala()
    {
        return $this->belongsToMany(gejala::class, 'diagnosisGejala');
    }
}
