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
        Schema::create('jenis_dokumen', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamps();
        });

        // Isi data default
        DB::table('jenis_dokumen')->insert([
            ['id' => 1, 'nama' => 'Kartu Tanda Penduduk (KTP)'],
            ['id' => 2, 'nama' => 'Pasport'],
            ['id' => 3, 'nama' => 'Surat Izin Mengemudi (SIM)'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_dokumen');
    }
};