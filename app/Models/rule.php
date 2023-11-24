<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\gejala;

class rule extends Model
{
    use HasFactory;
    protected $table = 'rules';

    protected $fillable = [
        'posts_id',
        'gejala_id'
    ];

    public function post()
    {
        return $this->belongsTo(post::class, 'posts_id');
    }
    public function gejala()
    {
        return $this->belongsTo(gejala::class, 'gejala_id');
    }
    public function nextGejala()
    {
        return $this->belongsTo(gejala::class, 'next_first_gejala_id');
    }
}
