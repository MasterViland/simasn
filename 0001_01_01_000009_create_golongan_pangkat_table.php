<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('golongan_pangkat', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->unique(); // contoh: "III/a"
            $table->string('nama_pangkat');   // contoh: "Penata Muda"
            $table->timestamps();
        });

        // Isi data default lengkap
        DB::table('golongan_pangkat')->insert([
            ['id' => 11, 'nama' => 'I/a',   'nama_pangkat' => 'Juru Muda'],
            ['id' => 12, 'nama' => 'I/b',   'nama_pangkat' => 'Juru Muda Tingkat I'],
            ['id' => 13, 'nama' => 'I/c',   'nama_pangkat' => 'Juru'],
            ['id' => 14, 'nama' => 'I/d',   'nama_pangkat' => 'Juru Tingkat I'],
            ['id' => 21, 'nama' => 'II/a',  'nama_pangkat' => 'Pengatur Muda'],
            ['id' => 22, 'nama' => 'II/b',  'nama_pangkat' => 'Pengatur Muda Tingkat I'],
            ['id' => 23, 'nama' => 'II/c',  'nama_pangkat' => 'Pengatur'],
            ['id' => 24, 'nama' => 'II/d',  'nama_pangkat' => 'Pengatur Tingkat I'],
            ['id' => 31, 'nama' => 'III/a', 'nama_pangkat' => 'Penata Muda'],
            ['id' => 32, 'nama' => 'III/b', 'nama_pangkat' => 'Penata Muda Tingkat I'],
            ['id' => 33, 'nama' => 'III/c', 'nama_pangkat' => 'Penata'],
            ['id' => 34, 'nama' => 'III/d', 'nama_pangkat' => 'Penata Tingkat I'],
            ['id' => 41, 'nama' => 'IV/a',  'nama_pangkat' => 'Pembina'],
            ['id' => 42, 'nama' => 'IV/b',  'nama_pangkat' => 'Pembina Tingkat I'],
            ['id' => 43, 'nama' => 'IV/c',  'nama_pangkat' => 'Pembina Utama Muda'],
            ['id' => 44, 'nama' => 'IV/d',  'nama_pangkat' => 'Pembina Utama Madya'],
            ['id' => 45, 'nama' => 'IV/e',  'nama_pangkat' => 'Pembina Utama'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('golongan_pangkat');
    }
};
