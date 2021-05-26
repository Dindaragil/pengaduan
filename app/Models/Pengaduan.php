<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table = 'pengaduan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'tgl',
        'nik',
        'isi',
        'foto',
        'status'
    ];

    protected $dates = ['tgl'];

    public function user()
    {
        return $this->hasOne(Masyarakat::class, 'nik', 'nik');
    }
}
