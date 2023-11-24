<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gejala extends Model
{
    use HasFactory;

    protected $table = 'gejalas';

    protected $fillable = [
        'kode_gejala',
        'gejala'
    ];
    protected $primaryKey = 'id';
    public function post()
    {
        return $this->belongsToMany(post::class, 'rule', 'gejala_id', 'posts_id');
    }
}
