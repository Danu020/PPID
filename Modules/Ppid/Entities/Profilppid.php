<?php

namespace Modules\Ppid\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profilppid extends Model
{
    use HasFactory;

    protected $table = 'profilppid';
    protected $id = 'id';
    protected $fillable = [
        'judul',
        'deskripsi',
    ];
}
