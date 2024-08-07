<?php

namespace Database\Seeders;

use App\Models\Dosen;
use App\Models\Kelas;
use App\Models\KelasMahasiswa;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Models\User;
use Illuminate\Support\Str;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'email' => 'fajri@gariskode.com',
            'password' => bcrypt('password'),
            'role' => 'dosen'
        ]);

        Dosen::create([
            'nidn' => '1234567890',
            'nama' => 'Fajri Rinaldi Chan',
            'jabatan' => 'lektor',
            'pangkat' => 'VI A',
            'foto' => 'fajri.jpg',
            'alamat' => 'Jl. Garis Kode No. 1',
            'jenis_kelamin' => 'L',
            'agama' => 'Islam',
            'pendidikan_terakhir' => 'S3',
            'user_id' => 1
        ]);

        

        Matakuliah::create([
            'nama_mk' => 'Pemrograman Web',
            'sks' => '3'
        ]);

        Matakuliah::create([
            'nama_mk' => 'Pemrograman Mobile',
            'sks' => '3'
        ]);

        Kelas::create([
            'kode_kelas' => str::random(10),
            'nama_kelas' => 'TI-2A',
            'tingkat' => '2',
            'jurusan' => 'Teknik Informatika',
            'kode_mk' => 1,
            'nidn' => 1234567890
        ]);

        Kelas::create([
            'kode_kelas' => str::random(10),
            'nama_kelas' => 'TI-2B',
            'tingkat' => '2',
            'jurusan' => 'Teknik Informatika',
            'kode_mk' => 2,
            'nidn' => 1234567890
        ]);

        User::factory(30)->create();
        Mahasiswa::factory(30)->create();

      
        

    }
}
