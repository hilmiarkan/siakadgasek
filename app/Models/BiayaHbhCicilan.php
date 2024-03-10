<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiayaHbhCicilan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal_pembayaran',
        'nominal',
        'biaya_hbh_id'
    ];

    public function biayaHbh()
    {
        return $this->belongsTo(BiayaHbh::class);
    }
}
