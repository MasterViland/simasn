<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('data_lokasi', function (Blueprint $table) {
            $table->id();
            $table->uuid('parent_id')->nullable();
            $table->index('parent_id');
            $table->uuid('parent_id2')->nullable();
            $table->string('nama');
            $table->string('jenis', 20);

            // Hierarchical helper columns (optional per baris)
            $table->string('negara_provinsi', 191)->nullable();
            $table->string('kabupaten', 191)->nullable();
            $table->string('kecamatan', 191)->nullable();
            $table->string('kelurahan', 191)->nullable();

            $table->timestamps();

            $table->index(['negara_provinsi', 'kabupaten', 'kecamatan', 'kelurahan'], 'idx_lokasi_hierarchy');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_lokasi');
    }
};
