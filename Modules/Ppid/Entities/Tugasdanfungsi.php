<?php

namespace Modules\Ppid\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tugasdanfungsi extends Model
{
    use HasFactory;

    protected $table = 'tugasdanfungsi';
    protected $id = 'id';
    protected $fillable = [
        'judul',
        'tugas',
        'fungsi',
    ];
}
