<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hasil extends Model
{
    use HasFactory;
    protected $table = 'hasil';

    protected $fillable = [
        'user_id',
        'riwayats_id'
    ];

    public function user()
    {
        return $this->belongsTo(user::class, 'user_id');
    }
    public function riwayat()
    {
        return $this->belongsTo(riwayat::class, 'riwayats_id');
    }
}
