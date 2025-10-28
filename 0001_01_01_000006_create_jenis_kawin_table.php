<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jenis_kawin', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->unique();
            $table->timestamps();
        });

        // Isi default data
        DB::table('jenis_kawin')->insert([
            ['id' => 1, 'nama' => 'Kawin'],
            ['id' => 2, 'nama' => 'Cerai Hidup'],
            ['id' => 3, 'nama' => 'Cerai Mati'],
            ['id' => 4, 'nama' => 'Belum Kawin'],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('jenis_kawin');
    }
};
