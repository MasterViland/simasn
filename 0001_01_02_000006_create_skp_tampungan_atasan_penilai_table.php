<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration 
{
    public function up(): void
    {
        Schema::create('skp_tampungan_atasan_penilai', function (Blueprint $table) {

            // Auto Increment
            $table->id();

            // Data Utama
            $table->unsignedBigInteger('skp_tampungan_id');
            $table->foreign('skp_tampungan_id')
                ->references('id')->on('skp_tampungan')
                ->onDelete('cascade');
            $table->string('nama');
            $table->string('nip');
            $table->unsignedBigInteger('golongan_atasan_id');
            $table->foreign('golongan_atasan_id')
                ->references('id')->on('golongan_pangkat')
                ->onDelete('restrict');
            $table->date('tmt_golongan');
            $table->string('jabatan');
            $table->string('unor');

            // Timestamps
            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('skp_tampungan_atasan_penilai');
    }
};
