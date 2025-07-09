<?php

namespace Modules\Ppid\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Strukturorganisasi extends Model
{
    use HasFactory;

    protected $table = 'struktur_organisasi';
    protected $id = 'id';
    protected $fillable = [
        'judul',
        'foto',
    ];
}
