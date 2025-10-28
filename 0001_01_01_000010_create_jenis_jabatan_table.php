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
        Schema::create('jenis_jabatan', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->unique();
            $table->timestamps();
        });

        // Isi data default
        DB::table('jenis_jabatan')->insert([
            ['id' => 1, 'nama' => 'Jabatan Struktural'],
            ['id' => 2, 'nama' => 'Jabatan Fungsional'],
            ['id' => 4, 'nama' => 'Jabatan Pelaksana'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_jabatan');
    }
};
