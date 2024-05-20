<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diagnosis extends Model
{
    use HasFactory;
    protected $table = 'diagnosis';

    protected $fillable = [
        'posts_id',
        'jawaban'
    ];

    protected $casts = [
        'jawaban' => 'json',
    ];

    public function post()
    {
        return $this->belongsTo(post::class);
    }

    public function getAnswerLogAttribute($value)
    {
        return json_decode($value);
    }

    public function setAnswerLogAttribute($value)
    {
        $this->attributes['jawaban'] = json_encode($value);
    }
}
