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
        Schema::create('kedudukan_hukum', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->unique();
            $table->timestamps();
        });

        // Isi data default
        DB::table('kedudukan_hukum')->insert([
            ['id' => 1, 'nama' => 'Aktif'],
            ['id' => 2, 'nama' => 'CLTN'],
            ['id' => 3, 'nama' => 'Tugas Belajar'],
            ['id' => 4, 'nama' => 'Pemberhentian Sementara'],
            ['id' => 5, 'nama' => 'Penerima Uang Tunggu'],
            ['id' => 6, 'nama' => 'Prajurit Wajib'],
            ['id' => 7, 'nama' => 'Pejabat Negara'],
            ['id' => 8, 'nama' => 'Kepala Desa'],
            ['id' => 9, 'nama' => 'Sedang dlm Proses Banding BAPEK'],
            ['id' => 11, 'nama' => 'Pegawai Titipan'],
            ['id' => 12, 'nama' => 'Pengungsi'],
            ['id' => 13, 'nama' => 'Perpanjangan CLTN'],
            ['id' => 14, 'nama' => 'PNS yang dinyatakan hilang'],
            ['id' => 15, 'nama' => 'PNS kena hukuman disiplin'],
            ['id' => 16, 'nama' => 'Pemindahan dalam rangka penurunan Jabatan'],
            ['id' => 20, 'nama' => 'Masa Persiapan Pensiun'],
            ['id' => 51, 'nama' => 'CPNS yang belum menerima SK CPNS'],
            ['id' => 52, 'nama' => 'Tidak Aktif'],
            ['id' => 66, 'nama' => 'Diberhentikan'],
            ['id' => 67, 'nama' => 'Punah'],
            ['id' => 68, 'nama' => 'Eks PNS Timor Timur'],
            ['id' => 69, 'nama' => 'TMS Dari Pengadaan'],
            ['id' => 70, 'nama' => 'Pembatalan NIP'],
            ['id' => 71, 'nama' => 'PPPK Aktif'],
            ['id' => 77, 'nama' => 'Pemberhentian tanpa hak pensiun'],
            ['id' => 88, 'nama' => 'Pemberhentian dengan hak pensiun'],
            ['id' => 89, 'nama' => 'Tidak aktif tetapi diusulkan Pensiun'],
            ['id' => 90, 'nama' => 'Tidak Ikut PUPNS 2015'],
            ['id' => 91, 'nama' => 'Tindak Pidana/ Tindak Pidana Jabatan'],
            ['id' => 92, 'nama' => 'Pemblokiran Data PNS'],
            ['id' => 98, 'nama' => 'Mencapai BUP'],
            ['id' => 99, 'nama' => 'Pensiun'],
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kedudukan_hukum');
    }
};
