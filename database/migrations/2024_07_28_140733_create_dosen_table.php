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
        Schema::create('dosen', function (Blueprint $table) {
            $table->unsignedBigInteger('nidn')->primary();
            $table->string('nama', 50);
            $table->enum('jabatan', ['asisten ahli', 'lektor', 'lektor kepala', 'guru besar']);
            $table->string('pangkat', 50);
            $table->string('foto')->nullable();
            $table->text('alamat');
            $table->string('pendidikan_terakhir', 50);
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosens');
    }
};
