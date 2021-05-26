<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;

    protected $table = 'tanggapan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_pengaduan',
        'tgl',
        'isi',
        'id_petugas'
    ];
}
