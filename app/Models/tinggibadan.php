<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tinggibadan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'jenis_kelamin',
        'umur',
        "ttl",
        'tanggal_masuk',
        'tinggi_badan',
        'status'
    ];

    protected $table = 'tinggibadan';
}
