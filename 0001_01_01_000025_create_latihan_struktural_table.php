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
    public function up()
    {
        Schema::create('latihan_struktural', function (Blueprint $table) {
            // Karena ID custom, kita buat integer manual
            $table->id();
            $table->string('nama');
            $table->timestamps();
        });

        // Isi data default
        DB::table('latihan_struktural')->insert([
            ['id' => 1, 'nama' => 'SEPADA'],
            ['id' => 2, 'nama' => 'SEPALA/ADUM/DIKLAT PIM TK.IV'],
            ['id' => 3, 'nama' => 'SEPADYA/SPAMA/DIKLAT PIM TK. III'],
            ['id' => 4, 'nama' => 'SPAMEN/SESPA/SESPANAS/DIKLAT PIM TK. II'],
            ['id' => 5, 'nama' => 'SEPATI/DIKLAT PIM TK. I'],
            ['id' => 6, 'nama' => 'SESPIM'],
            ['id' => 7, 'nama' => 'SESPATI'],
            ['id' => 8, 'nama' => 'Diklat Struktural Lainnya'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('latihan_struktural');
    }
};
