<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jabatan_unor', function (Blueprint $t) {
        $t->uuid('id')->primary();


        // relasi ke UNOR & Jabatan (keduanya string(36) sesuai skema Anda)
        $t->string('unor_id', 36);
        $t->string('jabatan_id', 36);


        // jumlah formasi yang diset untuk jabatan tsb di UNOR ini
        $t->unsignedInteger('formasi')->default(1);


        // catatan opsional (mis. jenjang/kelas/ket lain)
        $t->json('meta')->nullable();


        $t->timestamps();


        // FK & index
        $t->foreign('unor_id')->references('id')->on('unor')->onDelete('cascade');
        $t->foreign('jabatan_id')->references('id')->on('jabatan')->onDelete('cascade');


        $t->unique(['unor_id', 'jabatan_id']);
        $t->index(['unor_id']);
        $t->index(['jabatan_id']);
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('jabatan_unor');
    }
};