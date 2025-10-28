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
        Schema::create('penghargaan', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('nama');
            $table->timestamps();
        });

        // Data default penghargaan
        DB::table('penghargaan')->insert([
            ['id' => 100, 'nama' => 'BINTANG'],
            ['id' => 101, 'nama' => 'R.I ADIPURNA'],
            ['id' => 102, 'nama' => 'R.I ADIPRADANA'],
            ['id' => 103, 'nama' => 'R.I UTAMA'],
            ['id' => 104, 'nama' => 'R.I PRATAMA'],
            ['id' => 105, 'nama' => 'R.I NARARYA'],
            ['id' => 106, 'nama' => 'MAHAPUTERA ADIPURNA'],
            ['id' => 107, 'nama' => 'MAHAPUTERA ADIPRADANA'],
            ['id' => 108, 'nama' => 'MAHAPUTERA UTAMA'],
            ['id' => 109, 'nama' => 'MAHAPUTERA PRATAMA'],
            ['id' => 110, 'nama' => 'MAHAPUTERA NARARYA'],
            ['id' => 111, 'nama' => 'TANDA PENGHARGAAN TRIKORA'],
            ['id' => 112, 'nama' => 'TP PEMBEBASAN IRIAN BARAT'],
            ['id' => 201, 'nama' => 'KARYA SATYA 10 TAHUN'],
            ['id' => 202, 'nama' => 'KARYA SATYA 20 TAHUN'],
            ['id' => 203, 'nama' => 'KARYA SATYA 30 TAHUN'],
            ['id' => 204, 'nama' => 'WIRA KARYA'],
            ['id' => 300, 'nama' => 'TANDA JASA LAINNYA'],
            ['id' => 301, 'nama' => 'TP SIDHAKARYA ADHYAKSA'],
            ['id' => 302, 'nama' => 'TP PURNABAKTI ADHYAKSA'],
            ['id' => 303, 'nama' => 'TP DHARMA ADHYAKSA'],
            ['id' => 304, 'nama' => 'TP TELADAN TK NASIONAL'],
            ['id' => 305, 'nama' => 'TP TELADAN TK PROPINSI'],
            ['id' => 306, 'nama' => 'TP TELADAN TK KABUPATEN/KOTA'],
            ['id' => 307, 'nama' => 'TP PNS LUAR BIASA PRESTASINYA'],
            ['id' => 308, 'nama' => 'TP PENEMUAN BERMANFAAT BAGI NEGARA'],
            ['id' => 309, 'nama' => 'SISWA TELADAN'],
            ['id' => 310, 'nama' => 'OLIMPIADE'],
            ['id' => 400, 'nama' => 'TANDA PENGHARGAAN LAINNYA'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penghargaan');
    }
};
