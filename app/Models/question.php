<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    use HasFactory;

    protected $fillable = [
        'pertanyaan',
        'jenis_id'
    ];

    public function post()
    {
        return $this->belongsTo(post::class);
    }

    public function diagnosis()
    {
        return $this->belongsTo(diagnosis::class);
    }
}
