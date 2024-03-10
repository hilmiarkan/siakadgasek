<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiayaDaftarPondok extends Model
{
    use HasFactory;
    protected $fillable = [
        'tahun',
        'total_biaya',
        'user_id'
    ];
}
