<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiayaDaftarPondokCicilan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal_pembayaran',
        'nominal',
        'biaya_daftar_pondok_id'
    ];
}
