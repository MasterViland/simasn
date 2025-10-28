<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('skp_tampungan', function (Blueprint $table) {
            
            // Auto Increment
            $table->id();

            // Data Utama
            $table->string('asn_id', 255);
            $table->foreign('asn_id')
                ->references('asn_id')->on('data_asn')
                ->onDelete('cascade');
            $table->year('tahun_skp');
            $table->foreignId('jenis_jabatan_id')->constrained('jenis_jabatan');
            $table->string('nama_jabatan', 255);
            $table->string('unit_organisasi', 255);

            // Penilaian
            $table->enum('capaian_organisasi', ['Istimewa','Baik','Butuh Perbaikan','Kurang','Sangat Kurang']);
            $table->enum('rating_hasil', ['Diatas Ekspektasi','Sesuai Ekspektasi','Dibawah Ekspektasi']);
            $table->enum('rating_perilaku', ['Diatas Ekspektasi','Sesuai Ekspektasi','Dibawah Ekspektasi']);
            $table->enum('predikat', ['Sangat Baik','Baik','Butuh Perbaikan','Kurang','Sangat Kurang']);

            // Status Verifikasi
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
            $table->string('file_path', 255)->nullable();

            // Timestamps
            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('skp_tampungan');
    }
};
