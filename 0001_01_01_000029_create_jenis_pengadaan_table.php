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
        Schema::create('jenis_pengadaan', function (Blueprint $table) {
            $table->char('id', 1)->primary();
            $table->string('nama');
            $table->timestamps();
        });

        // Isi data default
        DB::table('jenis_pengadaan')->insert([
            ['id' => '1', 'nama' => 'UMUM'],
            ['id' => '2', 'nama' => 'HONORER'],
            ['id' => '3', 'nama' => 'SEKDES'],
            ['id' => '4', 'nama' => 'ALIH STATUS'],
            ['id' => '5', 'nama' => 'KHUSUS DOKTER'],
            ['id' => '6', 'nama' => 'TENAGA AHLI TERTENTU/KHUSUS'],
            ['id' => '7', 'nama' => 'KHUSUS SM-3T'],
            ['id' => '8', 'nama' => 'KHUSUS DISABILITAS'],
            ['id' => '9', 'nama' => 'KHUSUS PUTRA PUTRI TERBAIK'],
            ['id' => 'A', 'nama' => 'D1 STAN'],
            ['id' => 'B', 'nama' => 'DIASPORA'],
            ['id' => 'C', 'nama' => 'PPPK'],
            ['id' => 'D', 'nama' => 'GURU GARIS DEPAN'],
            ['id' => 'G', 'nama' => 'TENAGA GURU'],
            ['id' => 'I', 'nama' => 'IKATAN DINAS'],
            ['id' => 'K', 'nama' => 'PTT KEMENKES'],
            ['id' => 'L', 'nama' => 'THLTB PENYULUH PERTANIAN'],
            ['id' => 'O', 'nama' => 'UNTUK OLAHRAGAWAN BERPRESTASI DAN PELATIH BERPRESTASI'],
            ['id' => 'P', 'nama' => 'KHUSUS PUTRA/I PAPUA'],
            ['id' => 'S', 'nama' => 'STTD KEMENTRIAN PERHUBUNGAN'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_pengadaan');
    }
};
