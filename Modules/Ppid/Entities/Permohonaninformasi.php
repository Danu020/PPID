<?php

namespace Modules\Ppid\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permohonaninformasi extends Model
{
    use HasFactory;

    protected $table = 'permohonaninformasi';
    protected $fillable = [
        'id',
        'nama_pemohon',
        'nik',
        'alamat_pemohon',
        'nomor_telepon',
        'email',
        'informasi_yang_dibutuhkan',
        'alasan_permohonan',
        'status',
    ];
}