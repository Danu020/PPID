<?php

namespace Modules\Ppid\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JenisPermohonan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'jenis_permohonan',
    ];
}