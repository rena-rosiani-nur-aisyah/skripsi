<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\gejala;


$post = post::find(1);
$gejala = $post->gejala;
$gejala = gejala::find(1);
$post = $gejala->post;
class rule extends Model
{
    use HasFactory;
    protected $table = 'rules';


    protected $fillable = [
        'posts_id',
        'gejala_id',
        'operator',
        'value'
    ];

    public function post()
    {
        return $this->belongsToMany(post::class, 'rules_posts');
    }
    public function gejala()
    {
        return $this->belongsToMany(gejala::class, 'rules__gejalas');
    }
}

$rule = rule::find(1);
$post = $rule->post;
