<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiayaSyahriah extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal_keluaran',
        'tanggal_pembayaran',
        'nominal',
        'user_id'
    ];
}
