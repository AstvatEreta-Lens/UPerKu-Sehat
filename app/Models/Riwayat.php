<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    protected $table = 'riwayats_tables';
    protected $fillable = [
        'nama',
        'umur',
        'gender',
        'gejala',
        'diagnosa',
        'resep',
        'catatan',
    ];
}
