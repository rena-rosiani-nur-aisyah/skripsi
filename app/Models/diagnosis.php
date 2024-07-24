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
        'gejala_id',
        'jawabanUser'
    ];
    protected $with = [
        'user',
        'gejala'
    ];


    public function user()
    {
        return $this->belongsTo(user::class, 'user_id');
    }
    public function gejala()
    {
        return $this->belongsTo(gejala::class, 'gejala_id');
    }
    public function hasil()
    {
        return $this->hasMany(hasil::class, 'diagnosis_id');
    }
}
