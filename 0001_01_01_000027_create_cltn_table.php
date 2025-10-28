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
        Schema::create('cltn', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamps();
        });

        // Isi data default
        DB::table('cltn')->insert([
            ['id' => 1,  'nama' => 'CLTN'],
            ['id' => 2,  'nama' => 'Prajurit Wajib'],
            ['id' => 3,  'nama' => 'Pengaktifan kembali dari CLTN'],
            ['id' => 4,  'nama' => 'Pengaktifan kembali dari Prajurit Wajib'],
            ['id' => 5,  'nama' => 'Perpanjangan CLTN'],
            ['id' => 6,  'nama' => 'Tugas Belajar'],
            ['id' => 7,  'nama' => 'Perpanjangan Tugas Belajar'],
            ['id' => 8,  'nama' => 'Pengaktifan dari Tugas Belajar'],
            ['id' => 9,  'nama' => 'Pejabat Negara'],
            ['id' => 10, 'nama' => 'Kepala Desa'],
            ['id' => 11, 'nama' => 'Pengaktifan kembali Pejabat Negara'],
            ['id' => 12, 'nama' => 'Pengaktifan kembali Kepala Desa'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cltn');
    }
};
