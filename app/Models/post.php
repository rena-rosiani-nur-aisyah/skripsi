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
        'published_at'
    ];
    public function rule()
    {
        return $this->hasMany(rule::class);
    }
    public function diagnosis()
    {
        return $this->hasMany(diagnosis::class);
    }
}
