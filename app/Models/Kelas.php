<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';
    protected $primaryKey = 'kode_kelas';
    protected $guarded = [];
    public $incrementing = false;

    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class, 'kode_mk', 'kode_mk');
    }

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'nidn', 'nidn');
    }

    public function mahasiswa()
    {
        return $this->hasMany(KelasMahasiswa::class, 'kode_kelas', 'kode_kelas');
    }

    public function materi()
    {
        return $this->hasMany(Materi::class, 'kode_kelas', 'kode_kelas');
    }
}
