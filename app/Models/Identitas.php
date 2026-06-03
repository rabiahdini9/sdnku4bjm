<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identitas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_sekolah',
        'npsn',
        'nss',
        'kepala_sekolah',
        'kontak',
        'email',
        'alamat',
        'status_sekolah',
        'akreditasi',
        'tahun_berdiri',
    ];
}
