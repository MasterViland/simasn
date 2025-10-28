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
        Schema::create('eselon', function (Blueprint $table) {
            // ID manual sesuai kode eselon
            $table->integer('id')->primary();
            $table->string('nama')->unique();
            $table->string('tingkat_jabatan');
            $table->integer('usia_pensiun');
            $table->timestamps();
        });

        // Isi data default
        DB::table('eselon')->insert([
            ['id' => 11, 'nama' => 'I-a',     'tingkat_jabatan' => 'JPT Utama',   'usia_pensiun' => 60],
            ['id' => 12, 'nama' => 'I-b',     'tingkat_jabatan' => 'JPT Madya',   'usia_pensiun' => 60],
            ['id' => 21, 'nama' => 'II-a',    'tingkat_jabatan' => 'JPT Pratama', 'usia_pensiun' => 60],
            ['id' => 22, 'nama' => 'II-b',    'tingkat_jabatan' => 'JPT Pratama', 'usia_pensiun' => 60],
            ['id' => 31, 'nama' => 'III-a',   'tingkat_jabatan' => 'Administrator','usia_pensiun' => 58],
            ['id' => 32, 'nama' => 'III-b',   'tingkat_jabatan' => 'Administrator','usia_pensiun' => 58],
            ['id' => 41, 'nama' => 'IV-a',    'tingkat_jabatan' => 'Pengawas',    'usia_pensiun' => 58],
            ['id' => 42, 'nama' => 'IV-b',    'tingkat_jabatan' => 'Pengawas',    'usia_pensiun' => 58],
            ['id' => 51, 'nama' => 'V-a',     'tingkat_jabatan' => 'Pengawas',    'usia_pensiun' => 58],
            ['id' => 52, 'nama' => 'V-b',     'tingkat_jabatan' => 'Pengawas',    'usia_pensiun' => 58],
            ['id' => 99, 'nama' => 'Non Eselon','tingkat_jabatan' => 'Non Eselon',  'usia_pensiun' => 0],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eselon');
    }
};
