<?php

namespace Modules\Ppid\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kelola_profil extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_direktur',
        'sambutan',
        'media',
        'ppid',
        'foto_organisasi',
        'tugas_fungsi',
        'visi',
        'misi',
    ];
}
