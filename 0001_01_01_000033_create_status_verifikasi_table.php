<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('status_verifikasi', function (Blueprint $table) {
            $table->id('id_status_verifikasi');
            $table->string('nama_status', 255)->unique();
            $table->timestamps();
        });

        // Seed default statuses sesuai dump terbaru
        $now = now();
        $items = [
            'Belum Terverifikasi',   // 1: user baru simpan
            'Menunggu Verifikasi',   // 2: sudah kirim
            'Disetujui Level 1',     // 3: disetujui tahap awal
            'Ditolak',               // 4: ditolak (boleh revisi/kirim ulang)
            'Disetujui Final',       // 5: sudah disetujui penuh
            'Ditolak Admin Utama'    // 6: ditolak level 2/final
        ];

        foreach ($items as $status) {
            DB::table('status_verifikasi')->insertOrIgnore([
                'nama_status' => $status,
                'created_at'  => $now,
                'updated_at'  => $now,
            ]);
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('status_verifikasi');
    }
};
