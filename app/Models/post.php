<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class post extends Model
{
    use HasFactory;
    protected $table = 'posts';

    protected $fillable = [
        'kode_penyakit',
        'name',
        'deskripsi',
        'Penyebab',
        'Solusi',
        'published_at'
    ];
    public function rule()
    {
        return $this->belongsToMany(rule::class, 'rules_posts');
    }
    public function diagnosis()
    {
        return $this->belongsToMany(diagnosis::class, 'diagnosis_posts');
    }
    public function gejala()
    {
        return $this->belongsToMany(gejala::class, 'post_gejalas');
    }
    public function questions()
    {
        return $this->belongsToMany(question::class, 'questions_posts');
    }
}
