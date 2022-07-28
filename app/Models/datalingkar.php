<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datalingkar extends Model
{
    use HasFactory;

    protected $fillable = [
        'uid',
        'name',
        'jenis_kelamin',
        'umur',
        "ttl",
        'tanggal_masuk',
        'gambar',
        'lingkar_kepala',
        'status',
        'tinggi_badan',
        'status_tinggi',
        'berat_badan',
        'status_berat',
        'growthID',
    ];

    protected $table = 'datalingkar';

}
