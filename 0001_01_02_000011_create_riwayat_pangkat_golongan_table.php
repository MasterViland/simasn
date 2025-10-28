<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('riwayat_pangkat_golongan', function (Blueprint $table) {
            
            // Auto Increment
            $table->id();

            // Data Utama
            $table->string('asn_id', 255);
            $table->foreign('asn_id')
                ->references('asn_id')->on('data_asn')
                ->onDelete('cascade');
            $table->unsignedBigInteger('pangkat');
            $table->foreign('pangkat')
                ->references('id')->on('golongan_pangkat')
                ->onDelete('restrict');
            $table->unsignedBigInteger('jenis_kp');
            $table->foreign('jenis_kp')
                ->references('id')->on('jenis_kp')
                ->onDelete('restrict');
            $table->unsignedTinyInteger('mk_tahun');
            $table->unsignedTinyInteger('mk_bulan');
            $table->date('tmt_golongan');
            $table->string('nomor_pertimbangan_teknis_bkn')->nullable();
            $table->date('tanggal_pertimbangan_teknis_bkn')->nullable();
            $table->string('nomor_sk');
            $table->date('tanggal_sk');
            $table->integer('gaji_pokok')->nullable();
            $table->date('tanggal_berkala_selanjutnya')->nullable();

            // Pejabat Yang Bertanda Tangan
            $table->string('nip')->nullable();
            $table->string('nama')->nullable();
            $table->unsignedBigInteger('pangkat_pejabat')->nullable();
            $table->foreign('pangkat_pejabat')
                ->references('id')->on('golongan_pangkat')
                ->onDelete('restrict');
            $table->string('nama_jabatan')->nullable();
            $table->string('nama_instansi')->nullable();

            // Status Verifikasi
            $table->unsignedBigInteger('id_status_verifikasi')->default(5);
            $table->foreign('id_status_verifikasi')
                ->references('id_status_verifikasi')
                ->on('status_verifikasi');

            // File
            $table->string('file_path_sk_kenaikan', 255)->nullable();
            $table->string('file_path_pertimbangan', 255)->nullable();

            // Timestamps
            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('riwayat_pangkat_golongan');
    }
};
