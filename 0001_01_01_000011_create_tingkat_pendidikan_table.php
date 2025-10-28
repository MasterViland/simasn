<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tingkat_pendidikan', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->unique();
            $table->string('nama_baru')->unique();
            $table->timestamps();
        });

        // Isi data default
        DB::table('tingkat_pendidikan')->insert([
            ['id' => 5, 'nama' => 'Sekolah Dasar', 'nama_baru' => 'Sekolah Dasar (SD)'],
            ['id' => 10, 'nama' => 'SLTP', 'nama_baru' => 'Sekolah Menengah Pertama (SMP)'],
            ['id' => 12, 'nama' => 'SLTP Kejuruan', 'nama_baru' => 'Sekolah Menengah Pertama (SMP) Kejuruan'],
            ['id' => 15, 'nama' => 'SLTA', 'nama_baru' => 'Sekolah Menengah Atas (SMA)'],
            ['id' => 17, 'nama' => 'SLTA Kejuruan', 'nama_baru' => 'Sekolah Menengah Atas (SMA) Kejuruan'],
            ['id' => 18, 'nama' => 'SLTA Keguruan', 'nama_baru' => 'Sekolah Menengah Atas (SMA) Keguruan'],
            ['id' => 20, 'nama' => 'Diploma I', 'nama_baru' => 'Diploma I (D1)'],
            ['id' => 25, 'nama' => 'Diploma II', 'nama_baru' => 'Diploma II (D2)'],
            ['id' => 30, 'nama' => 'Diploma III/Sarjana Muda', 'nama_baru' => 'Diploma III (D3)'],
            ['id' => 35, 'nama' => 'Diploma IV', 'nama_baru' => 'Diploma IV (D4)'],
            ['id' => 40, 'nama' => 'S-1/Sarjana', 'nama_baru' => 'Sarjana (S1)'],
            ['id' => 45, 'nama' => 'S-2', 'nama_baru' => 'Magister (S2)'],
            ['id' => 50, 'nama' => 'S-3/Doktor', 'nama_baru' => 'Doktor (S3)'],
        ]); 
    }

    public function down(): void
    {
        Schema::dropIfExists('tingkat_pendidikan');
    }
};
