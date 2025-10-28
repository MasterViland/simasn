<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('agama', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->unique();
            $table->timestamps();
        });

        // Isi data default
        DB::table('agama')->insert([
            ['id' => 1, 'nama' => 'Islam'],
            ['id' => 2, 'nama' => 'Kristen'],
            ['id' => 3, 'nama' => 'Katholik'],
            ['id' => 4, 'nama' => 'Hindu'],
            ['id' => 5, 'nama' => 'Buddha'],
            ['id' => 6, 'nama' => 'Konghucu'],
            ['id' => 7, 'nama' => 'Lainnya'],
            ['id' => 8, 'nama' => 'Kepercayaan Terhadap Tuhan YME'],
        ]);

    }

    public function down(): void
    {
        Schema::dropIfExists('agama');
    }
};

