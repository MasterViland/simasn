<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('data_asn', function (Blueprint $table) {

            $table->string('asn_id')->primary();
            $table->string('nip_baru')->unique()->nullable();
            $table->string('nip_lama')->nullable();
            $table->string('nama');
            $table->string('gelar_depan')->nullable();
            $table->string('gelar_belakang')->nullable();
            $table->uuid('tempat_lahir_id')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->unsignedBigInteger('jenis_kelamin_id');
            $table->unsignedBigInteger('agama_id');
            $table->unsignedBigInteger('jenis_kawin_id');
            $table->string('nik')->unique()->nullable();
            $table->string('nomor_hp')->nullable();
            $table->string('email')->nullable();
            $table->string('email_gov')->nullable();
            $table->text('alamat')->nullable();
            $table->string('npwp')->nullable();
            $table->string('bpjs')->nullable();
            $table->unsignedBigInteger('jenis_pegawai_id');
            $table->unsignedBigInteger('kedudukan_hukum_id');
            $table->string('status_asn')->nullable();
            $table->unsignedBigInteger('status_asn_id')->nullable();
            $table->string('kartu_asn_virtual')->nullable();
            $table->string('nomor_sk_cpns')->nullable();
            $table->date('tanggal_sk_cpns')->nullable();
            $table->date('tmt_cpns')->nullable();
            $table->string('nomor_sk_pns')->nullable();
            $table->date('tanggal_sk_pns')->nullable();
            $table->date('tmt_pns')->nullable();
            $table->unsignedBigInteger('gol_awal_id')->nullable();
            $table->unsignedBigInteger('gol_akhir_id')->nullable();
            $table->date('tmt_golongan')->nullable();
            $table->smallInteger('mk_tahun')->nullable();
            $table->smallInteger('mk_bulan')->nullable();
            $table->unsignedBigInteger('jenis_jabatan_id');
            $table->string('jabatan_id', 36)->nullable();
            $table->date('tmt_jabatan')->nullable();
            $table->unsignedBigInteger('tingkat_pendidikan_id');
            $table->uuid('pendidikan_id')->nullable();
            $table->smallInteger('tahun_lulus')->nullable();
            $table->string('kpkn_id')->nullable();
            $table->uuid('lokasi_kerja_id')->nullable();
            $table->string('unor_id')->nullable();
            $table->string('instansi_induk_id')->nullable();
            $table->string('instansi_kerja_id')->nullable();
            $table->string('satuan_kerja_induk_id')->nullable();
            $table->string('satuan_kerja_kerja_id')->nullable();
            $table->boolean('is_valid_nik')->default(true);
            $table->string('nama_sekolah')->nullable();
            $table->boolean('flag_ikd')->default(false);
            $table->string('foto')->nullable();
            $table->timestamps();

            // Foreign keys
            $table->foreign('tempat_lahir_id')->references('parent_id')->on('data_lokasi')->onDelete('cascade');
            $table->foreign('jenis_kelamin_id')->references('id')->on('jenis_kelamin')->onDelete('cascade');
            $table->foreign('agama_id')->references('id')->on('agama')->onDelete('cascade');
            $table->foreign('jenis_kawin_id')->references('id')->on('jenis_kawin')->onDelete('cascade');
            $table->foreign('jenis_pegawai_id')->references('id')->on('jenis_pegawai')->onDelete('cascade');
            $table->foreign('kedudukan_hukum_id')->references('id')->on('kedudukan_hukum')->onDelete('cascade');
            $table->foreign('status_asn_id')->references('id')->on('status_asn')->onDelete('cascade');
            $table->foreign('gol_awal_id')->references('id')->on('golongan_pangkat')->onDelete('cascade');
            $table->foreign('gol_akhir_id')->references('id')->on('golongan_pangkat')->onDelete('cascade');
            $table->foreign('jenis_jabatan_id')->references('id')->on('jenis_jabatan')->onDelete('cascade');
            $table->foreign('jabatan_id')->references('id')->on('jabatan')->onDelete('cascade');
            $table->foreign('tingkat_pendidikan_id')->references('id')->on('tingkat_pendidikan')->onDelete('cascade');
            $table->foreign('pendidikan_id')->references('id')->on('pendidikan')->onDelete('cascade');
            $table->foreign('kpkn_id')->references('id')->on('kpkn')->onDelete('cascade');
            $table->foreign('lokasi_kerja_id')->references('parent_id')->on('data_lokasi')->onDelete('cascade');
            $table->foreign('unor_id')->references('id')->on('unor')->onDelete('cascade');
            $table->foreign('instansi_induk_id')->references('id')->on('instansi')->onDelete('cascade');
            $table->foreign('instansi_kerja_id')->references('id')->on('instansi')->onDelete('cascade');
            $table->foreign('satuan_kerja_induk_id')->references('id')->on('satuan_kerja')->onDelete('cascade');
            $table->foreign('satuan_kerja_kerja_id')->references('id')->on('satuan_kerja')->onDelete('cascade');
            
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('data_asn');
    }
};