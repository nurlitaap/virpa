<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beratbadan extends Model
{
    use HasFactory;

    protected $fillable = [
        'uid',
        'name',
        'jenis_kelamin',
        'umur',
        "ttl",
        'tanggal_masuk',
        'berat_badan',
        'status',
        'growthID',
    ];

    protected $table = 'beratbadan';
}
