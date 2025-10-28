<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('riwayat_jabatan_tampungan', function (Blueprint $table) {
            
            // Auto Increment
            $table->id();

            // Data Utama
            $table->string('asn_id', 255);
            $table->foreign('asn_id')
                ->references('asn_id')->on('data_asn')
                ->cascadeOnDelete();
            $table->unsignedBigInteger('jenis_jabatan_id');
            $table->foreign('jenis_jabatan_id')
                ->references('id')->on('jenis_jabatan')
                ->cascadeOnDelete();
            $table->string('jabatan_id', 36)->nullable();
            $table->foreign('jabatan_id')
                ->references('id')->on('jabatan')
                ->restrictOnDelete();
            $table->integer('eselon_id')->nullable();
            $table->foreign('eselon_id')
                ->references('id')->on('eselon')
                ->restrictOnDelete();
            $table->integer('bup')->nullable(); 
            $table->string('nomor_sk_jabatan');
            $table->date('tanggal_sk_jabatan');
            $table->date('tmt_sk_jabatan');
            $table->string('perangkat_daerah')->nullable();
            $table->string('bidang')->nullable();
            $table->string('sub_bidang')->nullable();
            $table->string('unit_kerja')->nullable();
            $table->string('unor_id', 36)->nullable();
            $table->foreign('unor_id')
                ->references('id')->on('unor')
                ->cascadeOnDelete();
            $table->string('satuan_kerja_induk_id', 50)->nullable();
            $table->foreign('satuan_kerja_induk_id')
                ->references('id')->on('satuan_kerja')
                ->cascadeOnDelete();
            $table->string('instansi_induk_id', 36)->nullable();
            $table->foreign('instansi_induk_id')
                ->references('id')->on('instansi')
                ->cascadeOnDelete();
            $table->string('satuan_kerja_kerja_id', 50)->nullable();
            $table->foreign('satuan_kerja_kerja_id')
                ->references('id')->on('satuan_kerja')
                ->cascadeOnDelete();
            $table->string('instansi_kerja_id', 36)->nullable();
            $table->foreign('instansi_kerja_id')
                ->references('id')->on('instansi')
                ->cascadeOnDelete();
            $table->string('nomor_spp')->nullable();
            $table->date('tanggal_spp')->nullable();
            $table->date('tmt_spp')->nullable();
            $table->string('negara_provinsi')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kelurahan')->nullable();
            $table->uuid('lokasi_kerja_id')->nullable();
            $table->foreign('lokasi_kerja_id')
                ->references('parent_id')->on('data_lokasi')
                ->cascadeOnDelete();
            $table->unsignedTinyInteger('kelas_jabatan')->nullable();
            $table->integer('gaji_tunjangan')->nullable();

            // Status verifikasi
            $table->unsignedBigInteger('id_status_verifikasi')->default(1);
            $table->foreign('id_status_verifikasi')
                ->references('id_status_verifikasi')
                ->on('status_verifikasi');
            
            // Approval
            $table->foreignId('approved_by_level1')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamp('approved_at_level1')->nullable();
            $table->foreignId('approved_by_level2')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamp('approved_at_level2')->nullable();

            // Rejection
            $table->foreignId('rejected_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamp('rejected_at')->nullable();
            $table->foreignId('rejected_to_level1_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamp('rejected_to_level1_at')->nullable();
            $table->text('rejection_reason')->nullable();
            $table->string('rejection_type', 50)->nullable();

            // File
            $table->string('file_path_sk_jabatan', 255)->nullable();
            $table->string('file_path_surat_pelantikan', 255)->nullable();
            $table->string('file_path_surat_penugasan_penempatan', 255)->nullable();

            // Timestamps
            $table->timestamps();

            // Index
            $table->index(['asn_id','jenis_jabatan_id']);
            $table->index(['jabatan_id','eselon_id']);

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('riwayat_jabatan_tampungan');
    }
};
