<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class post extends Model
{
    use HasFactory;
    protected $table = 'posts';

    protected $fillable = [
        'name',
        'keterangan',
    ];
    public function gejala()
    {
        return $this->belongsToMany(gejala::class, 'rule', 'posts_id', 'gejala_id');
    }

    public function rule()
    {
        return $this->hasMany(rule::class);
    }

    public function diagnosis()
    {
        return $this->hasMany(diagnosis::class);
    }
}
