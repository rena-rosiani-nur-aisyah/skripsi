<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gejala extends Model
{
    use HasFactory;

    protected $table = 'gejalas';

    protected $fillable = [
        'keterangan',
        'image',
        'type'
    ];

    public function rule()
    {
        return $this->hasMany(rule::class, 'gejala_id');
    }
    public function signs()
    {
        return $this->hasMany(rule::class, 'signs_id');
    }
}
