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
        Schema::create('jenis_kepanitiaan', function (Blueprint $table) {
            $table->char('jenis_organisasi', 1)->primary();
            $table->string('nama');
            $table->timestamps();
        });

        // Data default jenis kepanitiaan
        DB::table('jenis_kepanitiaan')->insert([
            ['jenis_organisasi' => '0', 'nama' => 'Tidak ikut dalam organisasi'],
            ['jenis_organisasi' => '1', 'nama' => 'Politik'],
            ['jenis_organisasi' => '2', 'nama' => 'Ekonomi, termasuk Badan Usaha Negara'],
            ['jenis_organisasi' => '3', 'nama' => 'Sosial'],
            ['jenis_organisasi' => '4', 'nama' => 'Kebudayaan'],
            ['jenis_organisasi' => '5', 'nama' => 'Pendidikan'],
            ['jenis_organisasi' => '6', 'nama' => 'Keagamaan'],
            ['jenis_organisasi' => '7', 'nama' => 'Olah raga'],
            ['jenis_organisasi' => '8', 'nama' => 'Golongan Karya'],
            ['jenis_organisasi' => '9', 'nama' => 'Organisasi Masa'],
            ['jenis_organisasi' => 'A', 'nama' => 'Lain - Lain'],
            ['jenis_organisasi' => 'B', 'nama' => 'Dharma Wanita'],
            ['jenis_organisasi' => 'C', 'nama' => 'KORPRI'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_kepanitiaan');
    }
};
