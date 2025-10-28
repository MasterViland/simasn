<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration 
{
    public function up() : void
    {
        Schema::create('orangtua', function (Blueprint $table) {
            
            // Auto Increment
            $table->id();

            // Data Utama
            $table->string('asn_id', 255);
            $table->foreign('asn_id')
                ->references('asn_id')->on('data_asn')
                ->onDelete('cascade');
            $table->enum('orangtua', ['Ayah','Ibu'])->default('Ayah');
            $table->enum('status_asn', ['Bukan ASN','ASN Lingkup Sulbar','ASN Bukan Lingkup Sulbar'])->default('Bukan ASN');
            $table->string('nip', 18)->nullable();
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir', 100);
            $table->string('nik', 16)->nullable();
            $table->string('nomor_kk', 20)->nullable(); 
            $table->string('bpjs')->nullable();

            // Agama
            $table->unsignedBigInteger('agama_id');
            $table->foreign('agama_id')->references('id')->on('agama');

            // Jenis Kelamin
            $table->unsignedBigInteger('jenis_kelamin_id');
            $table->foreign('jenis_kelamin_id')->references('id')->on('jenis_kelamin');

            // Status Hidup
            $table->enum('status_hidup', ['Hidup','Meninggal'])->default('Hidup');
            $table->string('no_akta_meninggal')->nullable();
            $table->date('tgl_akta_meninggal')->nullable();

            // Jenis Kawin
            $table->unsignedBigInteger('jenis_kawin_id');
            $table->foreign('jenis_kawin_id')->references('id')->on('jenis_kawin');
            $table->string('no_akta_menikah')->nullable();
            $table->date('tgl_akta_menikah')->nullable();
            $table->string('no_akta_cerai')->nullable();
            $table->date('tgl_akta_cerai')->nullable();

            // Data Opsional
            $table->text('alamat')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('no_telepon')->nullable();
            $table->string('email')->nullable();

            // Status Verifikasi
            $table->unsignedBigInteger('id_status_verifikasi')->default(5);
            $table->foreign('id_status_verifikasi')
                ->references('id_status_verifikasi')
                ->on('status_verifikasi');

            // File
            $table->string('file_path_ktp', 255)->nullable();
            $table->string('file_path_bpjs', 255)->nullable();

            // Timestamps
            $table->timestamps();

        });
    }


    public function down()
    {
        Schema::dropIfExists('orangtua');
    }
};