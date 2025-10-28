<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jenis_hukuman', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->char('jenis_tingkat_hukuman_id', 1);
            $table->timestamps();
        });

        DB::table('jenis_hukuman')->insert([
            ['id' => 1 ,  'nama' => 'TEGURAN LISAN',                                                'jenis_tingkat_hukuman_id' => 'R'],
            ['id' => 2 ,  'nama' => 'TEGURAN TERTULIS',                                             'jenis_tingkat_hukuman_id' => 'R'],
            ['id' => 3 ,  'nama' => 'PERNYATAAN TIDAK PUAS SECARA TERTULIS',                        'jenis_tingkat_hukuman_id' => 'R'],
            ['id' => 4 ,  'nama' => 'PENUNDAAN KGB SELAMA 1 THN',                                   'jenis_tingkat_hukuman_id' => 'S'],
            ['id' => 5 ,  'nama' => 'PENURUNAN GAJI MAX 1 TH',                                      'jenis_tingkat_hukuman_id' => 'S'],
            ['id' => 6 ,  'nama' => 'PENUNDAAN GAJI MAX 1 THN',                                     'jenis_tingkat_hukuman_id' => 'S'],
            ['id' => 7 ,  'nama' => 'PENUNDAAN KP SELAMA 1 THN',                                    'jenis_tingkat_hukuman_id' => 'S'],
            ['id' => 8 ,  'nama' => 'PENURUNAN PANGKAT 1 TINGKAT 1 THN',                            'jenis_tingkat_hukuman_id' => 'S'],
            ['id' => 9 ,  'nama' => 'PEMBEBASAN DARI JABATAN',                                      'jenis_tingkat_hukuman_id' => 'B'],
            ['id' => 10,  'nama' => 'PEMBERHENTIAN DENGAN HORMAT TIDAK ATAS PERMINTAAN SENDIRI',    'jenis_tingkat_hukuman_id' => 'B'],
            ['id' => 11,  'nama' => 'PEMBERHENTIAN TIDAK DENGAN HORMAT SEBAGAI PNS',                'jenis_tingkat_hukuman_id' => 'B'],
            ['id' => 12,  'nama' => 'PENGAKTIFAN HUKUMAN DISIPLIN',                                 'jenis_tingkat_hukuman_id' => 'B'],
            ['id' => 13,  'nama' => 'PEMINDAHAN DLM RANGKA PENURUNAN JABATAN 1 TINGKAT',            'jenis_tingkat_hukuman_id' => 'B'],
            ['id' => 14,  'nama' => 'PENURUNAN PANGKAT 1 TINGKAT 3 THN',                            'jenis_tingkat_hukuman_id' => 'B'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_hukuman');
    }
};
