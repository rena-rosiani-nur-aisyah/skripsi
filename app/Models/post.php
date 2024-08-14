<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class post extends Model
{
    use HasFactory;
    protected $table = 'posts';

    protected $fillable = [
        // 'kode_penyakit',
        'name',
        'deskripsi',
        // 'Penyebab',
        'Solusi'
    ];
    public function rule()
    {
        return $this->hasMany(rule::class, 'post_id');
    }
    public function hasil()
    {
        return $this->hasMany(hasil::class);
    }
}
