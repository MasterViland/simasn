<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('jenis_kp', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('nama');
            $table->timestamps();
        });

        // Isi data default
        DB::table('jenis_kp')->insert([
            ['id' => 101, 'nama' => 'Reguler'],
            ['id' => 201, 'nama' => 'Pilihan (Jabatan Struktural)'],
            ['id' => 202, 'nama' => 'Pilihan (Jabatan Fungsional Tertentu)'],
            ['id' => 203, 'nama' => 'Pilihan (Penyesuaian Ijazah)'],
            ['id' => 204, 'nama' => 'Pilihan (Sedang Melaksanakan Tugas Belajar)'],
            ['id' => 205, 'nama' => 'Pilihan (Setelah Selesai Tugas Belajar)'],
            ['id' => 206, 'nama' => 'Pilihan (Diperbantukan/Diperkerjakan Instansi Lain)'],
            ['id' => 207, 'nama' => 'Pilihan (Penemuan Baru)'],
            ['id' => 208, 'nama' => 'Pilihan (Prestasi Luar Biasa)'],
            ['id' => 209, 'nama' => 'Pilihan (Pejabat Negara)'],
            ['id' => 210, 'nama' => 'Pilihan (Selama DPK/DPB)'],
            ['id' => 211, 'nama' => 'Gol. dari Pengadaan CPNS/PNS'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_kp');
    }
};