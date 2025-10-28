<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB; // jangan lupa import DB

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('jenis_kompetensi', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamps();
        });

        // Isi data default
        DB::table('jenis_kompetensi')->insert([
            ['id' => 1 , 'nama' => 'Adaptasi terhadap Perubahan (AtP)'],
            ['id' => 2 , 'nama' => 'Analisis Strategis (AS)'],
            ['id' => 3 , 'nama' => 'Berpikir Analisis (BA)'],
            ['id' => 4 , 'nama' => 'Berpikir Konseptual (BK)'],
            ['id' => 5 , 'nama' => 'Berorientasi pada Hasil (BpH)'],
            ['id' => 6 , 'nama' => 'Berorientasi pada Kualitas (BpK)'],
            ['id' => 7 , 'nama' => 'Berorientasi pada Pelayanan (BpP)'],
            ['id' => 8 , 'nama' => 'Fleksibilitas Berpikir (FB)'],
            ['id' => 9 , 'nama' => 'Inisiatif (Ini)'],
            ['id' => 10, 'nama' => 'Inovasi (Inov)'],
            ['id' => 11, 'nama' => 'Integritas (Int)'],
            ['id' => 12, 'nama' => 'Kegigihan (Kgg)'],
            ['id' => 13, 'nama' => 'Kepemimpinan (Kp)'],
            ['id' => 14, 'nama' => 'Kepemimpinan Strategis (KpS)'],
            ['id' => 15, 'nama' => 'Kerja Sama (KS)'],
            ['id' => 16, 'nama' => 'Ketabahan (Resilience)'],
            ['id' => 17, 'nama' => 'Komitmen terhadap Organisasi (KtO)'],
            ['id' => 18, 'nama' => 'Komunikasi (Kom)'],
            ['id' => 19, 'nama' => 'Komunikasi Lisan (Komlis)'],
            ['id' => 20, 'nama' => 'Komunikasi Tertulis (Komtul)'],
            ['id' => 21, 'nama' => 'Kreativitas (Kre)'],
            ['id' => 22, 'nama' => 'Manajemen Waktu (MW)'],
            ['id' => 23, 'nama' => 'Membangun Hubungan Kerja (MHK)'],
            ['id' => 24, 'nama' => 'Membangun Hubungan Kerjasama Strategis (MHKS)'],
            ['id' => 25, 'nama' => 'Mengambil Resiko (BilRis)'],
            ['id' => 26, 'nama' => 'Mengarahkan/Memberikan Perintah (MMP)'],
            ['id' => 27, 'nama' => 'Mengelola Konflik (MK)'],
            ['id' => 28, 'nama' => 'Mengembangkan Orang Lain (MOL)'],
            ['id' => 29, 'nama' => 'Memfasilitasi Perubahan (MP)'],
            ['id' => 30, 'nama' => 'Negosiasi (Nego)'],
            ['id' => 31, 'nama' => 'Pembelajaran Berkelanjutan (PB)'],
            ['id' => 32, 'nama' => 'Pencarian Informasi (PI)'],
            ['id' => 33, 'nama' => 'Pendelegasian Wewenang (PW)'],
            ['id' => 34, 'nama' => 'Pengambilan Keputusan (PK)'],
            ['id' => 35, 'nama' => 'Pengambilan Keputusan Strategis (PKS)'],
            ['id' => 36, 'nama' => 'Pengaturan Kerja (PkJ)'],
            ['id' => 37, 'nama' => 'Perbaikan Terus-menerus (PTM)'],
            ['id' => 38, 'nama' => 'Perencanaan dan Pengorganisasian (PP)'],
            ['id' => 39, 'nama' => 'Semangat Berprestasi (SB)'],
            ['id' => 40, 'nama' => 'Berpikir Analitis (BAt)'],
            ['id' => 41, 'nama' => 'Keuletan (Keut)'],
            ['id' => 42, 'nama' => 'Pengendalian Diri (PDr)'],
            ['id' => 43, 'nama' => 'Membimbing (Mbbg)'],
            ['id' => 44, 'nama' => 'Kesadaran akan Keselamatan Kerja (KKK)'],
            ['id' => 45, 'nama' => 'Kewirausahaan (Kwk)'],
            ['id' => 46, 'nama' => 'Perhatian terhadap Keteraturan (PtK)'],
            ['id' => 47, 'nama' => 'Pengorganisasian (Porg)'],
            ['id' => 48, 'nama' => 'Perencanaan (Prcn)'],
            ['id' => 49, 'nama' => 'Manajemen Konflik (MKf)'],
            ['id' => 50, 'nama' => 'Manajemen Perubahan (MPrb)'],
            ['id' => 51, 'nama' => 'Tanggap terhadap Pengaruh Budaya (TtPBdy)'],
            ['id' => 52, 'nama' => 'Empati (Ept)'],
            ['id' => 53, 'nama' => 'Interaksi Sosial (Isos)'],
            ['id' => 54, 'nama' => 'Visioning (Penetapan Visi)'],
            ['id' => 55, 'nama' => 'Innovation (Inovasi)'],
            ['id' => 56, 'nama' => 'In-Depth Problem Solving And Analysis and Decision Making (Analisa dan Pemecahan Masalah serta Pengambilan Keputusan)'],
            ['id' => 57, 'nama' => 'Championing Change (Memimpin Perubahan)'],
            ['id' => 58, 'nama' => 'Integrity (Integritas) dan Courage of Conviction (Keberanian berdasarkan Keyakinan)'],
            ['id' => 59, 'nama' => 'Planning And Organizing (Perencanaan dan Pengroganisasian)'],
            ['id' => 60, 'nama' => 'Stakeholder Focus (Fokus Kepada Pemangku Kepentingan)'],
            ['id' => 61, 'nama' => 'Team Leadership (Kepemimpinan Tim)'],
            ['id' => 62, 'nama' => 'Managing Diversity (Mengelola Keberagaman)'],
            ['id' => 63, 'nama' => 'Driving For Results (Mendorong Hasil)'],
            ['id' => 64, 'nama' => 'Conflict Management (Pengelolaan Konflik)'],
            ['id' => 65, 'nama' => 'Communication (Komunikasi Lisan)'],
            ['id' => 66, 'nama' => 'Negotiation (Negosiasi)'],
            ['id' => 67, 'nama' => 'Developing Networking (Membangun Hubungan Kerjasama)'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_kompetensi');
    }
};
