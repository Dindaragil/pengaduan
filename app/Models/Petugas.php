<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Petugas extends Authenticatable
{
    use HasFactory;

    protected $table = 'petugas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'username',
        'password',
        'telp',
        'level'
    ];
}
