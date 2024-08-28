<?php

namespace Database\Seeders;

use App\Models\Dosen;
use App\Models\Kelas;
use App\Models\KelasMahasiswa;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Models\Materi;
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

        Materi::create([
            'judul' => 'Pertemuan 1 - Berkenalan dengan Pemrograman Web menggunakan Laravel',
            'deskripsi' => 'Materi ini berisi tentang pengenalan pemrograman web menggunakan framework laravel 11, materi ini wajib dipelajari oleh mahasiswa dan silahkan bertanya jika ada yang kurang dipahami',
            'isi_materi' => '<h1>Belajar Laravel</h1><p>lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum</p>',
            'nidn' => 1234567890,
            'kode_kelas' => Kelas::first()->kode_kelas,
            'status' => 'published'
        ]);

        Materi::create([
            'judul' => 'Pertemuan 2 - Apa itu MVC pada Laravel',
            'deskripsi' => 'Materi ini berisi tentang pengenalan MVC pada framework laravel 11, materi ini wajib dipelajari oleh mahasiswa dan silahkan bertanya jika ada yang kurang dipahami',
            'isi_materi' => '<h1>Belajar MVC</h1><p>lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum</p>',
            'nidn' => 1234567890,
            'kode_kelas' => Kelas::first()->kode_kelas,
            'status' => 'published'
        ]);

        Materi::create([
            'judul' => 'Pertemuan 3 - Belajar CRUD dengan Laravel',
            'deskripsi' => 'Materi ini berisi tentang pengenalan CRUD pada framework laravel 11, materi ini wajib dipelajari oleh mahasiswa dan silahkan bertanya jika ada yang kurang dipahami',
            'isi_materi' => '<h1>Belajar CRUD</h1><p>lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum</p>',
            'nidn' => 1234567890,
            'kode_kelas' => Kelas::first()->kode_kelas,
            'status' => 'published'
        ]);

        Materi::create([
            'judul' => 'Pertemuan 4 - Belajar Relasi Tabel dengan Laravel',
            'deskripsi' => 'Materi ini berisi tentang pengenalan relasi tabel pada framework laravel 11, materi ini wajib dipelajari oleh mahasiswa dan silahkan bertanya jika ada yang kurang dipahami',
            'isi_materi' => '<h1>Belajar Relasi Tabel</h1><p>lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum</p>',
            'nidn' => 1234567890,
            'kode_kelas' => Kelas::first()->kode_kelas,
            'status' => 'published'
        ]);

        Materi::create([
            'judul' => 'Pertemuan 5 - Belajar Middleware pada Laravel',
            'deskripsi' => 'Materi ini berisi tentang pengenalan middleware pada framework laravel 11, materi ini wajib dipelajari oleh mahasiswa dan silahkan bertanya jika ada yang kurang dipahami',
            'isi_materi' => '<h1>Belajar Middleware</h1><p>lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum</p>',
            'nidn' => 1234567890,
            'kode_kelas' => Kelas::first()->kode_kelas,
            'status' => 'published'
        ]);

        Materi::create([
            'judul' => 'Pertemuan 6 - Belajar API dengan Laravel',
            'deskripsi' => 'Materi ini berisi tentang pengenalan API pada framework laravel 11, materi ini wajib dipelajari oleh mahasiswa dan silahkan bertanya jika ada yang kurang dipahami',
            'isi_materi' => '<h1>Belajar API</h1><p>lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum</p>',
            'nidn' => 1234567890,
            'kode_kelas' => Kelas::first()->kode_kelas,
            'status' => 'published'
        ]);


        Materi::create([
            'judul' => 'Berkenalan dengan Pemrograman Mobile menggunakan Flutter',
            'deskripsi' => 'Materi ini berisi tentang pengenalan pemrograman mobile menggunakan framework flutter, materi ini wajib dipelajari oleh mahasiswa dan silahkan bertanya jika ada yang kurang dipahami',
            'isi_materi' => '<h1>Belajar Flutter</h1><p>lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum</p>',
            'nidn' => 1234567890,
            'kode_kelas' => Kelas::all()->last()->kode_kelas,
            'status' => 'published'
        ]);
    }
}
