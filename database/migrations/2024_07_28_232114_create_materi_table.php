<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('materi', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 50);
            $table->text('deskripsi');
            $table->text('isi_materi');
            $table->string('gambar')->nullable();
            $table->string('link')->nullable();
            $table->string('file')->nullable();
            $table->string('video')->nullable();
            $table->string('kode_mk', 10);
            $table->foreign('kode_mk')->references('kode_mk')->on('matakuliah')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('nidn');
            $table->foreign('nidn')->references('nidn')->on('dosen')->onUpdate('cascade')->onDelete('cascade');
            $table->uuid('kode_kelas');
            $table->foreign('kode_kelas')->references('kode_kelas')->on('kelas')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('status', ['aktif', 'nonaktif']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materis');
    }
};