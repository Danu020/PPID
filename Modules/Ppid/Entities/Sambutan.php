<?php

namespace Modules\Ppid\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sambutan extends Model
{
    protected $table = 'sambutan';
    protected $id = 'id';
    protected $fillable = [
        'judul',
        'nama_direktur',
        'jabatan',
        'isi',
        'media',
    ];
}
