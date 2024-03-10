<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiayaDaftarUlang extends Model
{
    use HasFactory;

    protected $fillable = [
        'semester',
        'tahun',
        'tanggal_pembayaran',
        'nominal',
        'user_id'
    ];
}
