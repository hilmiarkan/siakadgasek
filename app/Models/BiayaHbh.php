<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiayaHbh extends Model
{
    use HasFactory;

    protected $fillable = [
        'tahun',
        'total_biaya',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cicilan()
    {
        return $this->hasMany(BiayaHbhCicilan::class);
    }
}
