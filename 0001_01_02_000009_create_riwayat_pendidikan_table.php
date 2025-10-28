<?php
// 0001_01_02_000009_create_riwayat_pendidikan_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('riwayat_pendidikan', function (Blueprint $table) {
            
            $table->id();

            // Data Utama
            $table->string('asn_id', 255);
            $table->foreign('asn_id')
                ->references('asn_id')->on('data_asn')
                ->onDelete('cascade');
            
            $table->unsignedBigInteger('tingkat_pendidikan_id');
            $table->foreign('tingkat_pendidikan_id')
                ->references('id')->on('tingkat_pendidikan')
                ->restrictOnDelete();
            
            $table->uuid('pendidikan_id')->nullable();
            $table->foreign('pendidikan_id')
                ->references('id')->on('pendidikan')
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            $table->string('nama_sekolah', 255)->nullable();
            
            $table->date('tanggal_ijazah')->nullable();
            $table->smallInteger('tahun_lulus')->nullable();
            $table->string('gelar_depan', 50)->nullable();
            $table->string('gelar_belakang', 50)->nullable();
            
            // CPNS Pertama
            $table->boolean('pendidikan_cpns_pertama')->default(false);
            $table->string('asn_id_cpns', 255)->nullable()
                ->storedAs("IF(pendidikan_cpns_pertama, asn_id, NULL)");

            // Status Verifikasi
            $table->unsignedBigInteger('id_status_verifikasi')->default(5);
            $table->foreign('id_status_verifikasi')
                ->references('id_status_verifikasi')
                ->on('status_verifikasi');

            // File
            $table->string('file_path_ijazah', 255)->nullable();
            $table->string('file_path_transkrip', 255)->nullable();

            $table->timestamps();

            // CONSTRAINT YANG BENAR
            $table->index(['asn_id', 'pendidikan_cpns_pertama']);
            $table->index('tingkat_pendidikan_id');
            
            // User hanya boleh 1 CPNS pertama
            $table->unique('asn_id_cpns', 'uniq_asn_cpns_marker');
            
            // User tidak boleh duplikat tingkat + tahun (tapi boleh pendidikan sama dengan tahun berbeda)
            $table->unique(['asn_id','tingkat_pendidikan_id','tahun_lulus'], 'uniq_asn_tingkat_tahun');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('riwayat_pendidikan');
    }
};