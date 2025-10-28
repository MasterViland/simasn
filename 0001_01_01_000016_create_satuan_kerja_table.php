<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('satuan_kerja', function (Blueprint $table) {
            $table->string('id', 50)->primary();
            $table->string('nama', 255);
            $table->string('instansi_id', 50);
            $table->foreign('instansi_id')->references('id')->on('instansi')->onDelete('restrict');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('satuan_kerja');
    }
};