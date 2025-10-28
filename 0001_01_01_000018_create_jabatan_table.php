<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jabatan', function (Blueprint $table) {
            $table->string('id', 36)->primary();
            $table->string('nama');
            $table->unsignedBigInteger('jenis_jabatan_id');
            $table->integer('bup')->nullable();
            $table->integer('eselon_id')->nullable();
            $table->json('meta')->nullable(); // jenjang, jenis_jenjang, jabatan, wilayah
            $table->timestamps();

            $table->foreign('jenis_jabatan_id')->references('id')->on('jenis_jabatan')->onDelete('cascade');
            $table->foreign('eselon_id')->references('id')->on('eselon')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jabatan');
    }
};