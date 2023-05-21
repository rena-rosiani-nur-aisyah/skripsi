<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class rule extends Model
{
    use HasFactory;
    protected $table = 'rules';

    protected $fillable = [
        'kondisi',
        'result'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($rule) {
            $lastCode = DB::table('rules')->orderBy('kode', 'desc')->first();
            if ($lastCode) {
                $newCode = 'P' . sprintf('%03d', intval(substr($lastCode->kode, 1)) + 1);
            } else {
                $newCode = 'P001';
            }
            $rule->kode = $newCode;
        });
    }
}
