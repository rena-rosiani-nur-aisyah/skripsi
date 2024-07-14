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
        'gejala_id',
        'signs_id',
        'post_id',
        'operator',
        'value'
    ];
    protected $with = [
        'post',
        'gejala',
        'signs'
    ];

    public function post()
    {
        return $this->belongsTo(post::class, 'post_id');
    }
    public function gejala()
    {
        return $this->belongsTo(gejala::class, 'gejala_id');
    }
    public function signs()
    {
        return $this->belongsTo(gejala::class, 'signs_id');
    }
}
