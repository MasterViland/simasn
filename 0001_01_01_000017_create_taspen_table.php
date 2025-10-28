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
        Schema::create('taspen', function (Blueprint $table) {

            $table->integer('id')->primary();
            $table->string('ktua', 32);
            $table->string('nama');
            $table->timestamps();
        });

        DB::table('taspen')->insert([
            ['id' =>   0, 'ktua' => 'A5EB03E21EF0F6A0E040640A040252AD', 'nama' => 'Kantor Pusat'],
            ['id' =>   1, 'ktua' => 'A5EB03E21EF4F6A0E040640A040252AD', 'nama' => 'Malang'],
            ['id' =>   5, 'ktua' => 'A5EB03E21EF1F6A0E040640A040252AD', 'nama' => 'Bekasi'],
            ['id' =>   6, 'ktua' => 'A5EB03E21EF1F6A0E040640A040252AD', 'nama' => 'Depok'],
            ['id' => 100, 'ktua' => 'A5EB03E21EF0F6A0E040640A040252AD', 'nama' => 'Jakarta'],
            ['id' => 101, 'ktua' => 'A5EB03E21EEFF6A0E040640A040252AD', 'nama' => 'Bandar Lampung'],
            ['id' => 102, 'ktua' => 'A5EB03E21EEEF6A0E040640A040252AD', 'nama' => 'Bengkulu'],
            ['id' => 103, 'ktua' => 'A5EB03E21EEDF6A0E040640A040252AD', 'nama' => 'Palembang'],
            ['id' => 104, 'ktua' => 'A5EB03E21EF6F6A0E040640A040252AD', 'nama' => 'Palangkaraya'],
            ['id' => 105, 'ktua' => 'A5EB03E21EF5F6A0E040640A040252AD', 'nama' => 'Pontianak'],
            ['id' => 106, 'ktua' => 'A5EB03E21F02F6A0E040640A040252AD', 'nama' => 'Pangkal Pinang'],
            ['id' => 107, 'ktua' => 'ff8080813196bb4c0131999452280b5b', 'nama' => 'Tangerang'],
            ['id' => 108, 'ktua' => 'A5EB03E21EF1F6A0E040640A040252AD', 'nama' => 'Tangerang Selatan'],
            ['id' => 111, 'ktua' => 'A5EB03E21EF0F6A0E040640A040252AD', 'nama' => '.'],
            ['id' => 200, 'ktua' => 'A5EB03E21EE9F6A0E040640A040252AD', 'nama' => 'Medan'],
            ['id' => 201, 'ktua' => 'A5EB03E21EE8F6A0E040640A040252AD', 'nama' => 'Banda Aceh'],
            ['id' => 202, 'ktua' => 'A5EB03E21EEAF6A0E040640A040252AD', 'nama' => 'Bengkulu'],
            ['id' => 203, 'ktua' => 'A5EB03E21EEFF6A0E040640A040252AD', 'nama' => 'Jambi'],
            ['id' => 204, 'ktua' => 'A5EB03E21EFDF6A0E040640A040252AD', 'nama' => 'Pekanbaru'],
            ['id' => 205, 'ktua' => 'A5EB03E21EFEF6A0E040640A040252AD', 'nama' => 'Palembang'],
            ['id' => 206, 'ktua' => 'A5EB03E21EE8F6A0E040640A040252AD', 'nama' => 'Padang'],
            ['id' => 207, 'ktua' => 'A5EB03E21EF7F6A0E040640A040252AD', 'nama' => 'Sibolga'],
            ['id' => 208, 'ktua' => 'ff8080813ef4d8b6013ef99ec862000d', 'nama' => 'Sorong'],
            ['id' => 209, 'ktua' => 'A5EB03E21EFBF6A0E040640A040252AD', 'nama' => 'Pontianak'],
            ['id' => 210, 'ktua' => 'A5EB03E21EFDF6A0E040640A040252AD', 'nama' => 'Banjarmasin'],
            ['id' => 300, 'ktua' => 'A5EB03E21EEAF6A0E040640A040252AD', 'nama' => 'Surabaya'],
            ['id' => 301, 'ktua' => 'A5EB03E21EEFF6A0E040640A040252AD', 'nama' => 'Malang'],
            ['id' => 302, 'ktua' => 'A5EB03E21EE8F6A0E040640A040252AD', 'nama' => 'Banyuwangi'],
            ['id' => 303, 'ktua' => 'A5EB03E21EF1F6A0E040640A040252AD', 'nama' => 'Madiun'],
            ['id' => 304, 'ktua' => 'ff80808154dda4bf0154e0a0b6867f05', 'nama' => 'Kediri'],
            ['id' => 305, 'ktua' => 'A5EB03E21EFBF6A0E040640A040252AD', 'nama' => 'Jember'],
            ['id' => 306, 'ktua' => 'A5EB03E21EFDF6A0E040640A040252AD', 'nama' => 'Bojonegoro'],
            ['id' => 307, 'ktua' => 'A5EB03E21EEEF6A0E040640A040252AD', 'nama' => 'Tuban'],
            ['id' => 308, 'ktua' => 'A5EB03E21EEFF6A0E040640A040252AD', 'nama' => 'Probolinggo'],
            ['id' => 309, 'ktua' => 'ff8080813ef4d8b6013ef99ec862000d', 'nama' => 'Situbondo'],
            ['id' => 400, 'ktua' => 'A5EB03E21EFDF6A0E040640A040252AD', 'nama' => 'Denpasar'],
            ['id' => 401, 'ktua' => 'A5EB03E21EFFF6A0E040640A040252AD', 'nama' => 'Kupang'],
            ['id' => 402, 'ktua' => 'A5EB03E21EFEF6A0E040640A040252AD', 'nama' => 'Mataram'],
            ['id' => 403, 'ktua' => 'A5EB03E21EFBF6A0E040640A040252AD', 'nama' => 'Bali'],
            ['id' => 404, 'ktua' => 'ff80808154dda4bf0154e0a0b6867f05', 'nama' => 'Nusa Tenggara Timur'],
            ['id' => 405, 'ktua' => 'A5EB03E21EFDF6A0E040640A040252AD', 'nama' => 'Nusa Tenggara Barat'],
            ['id' => 500, 'ktua' => 'A5EB03E21EEFF6A0E040640A040252AD', 'nama' => 'Samarinda'],
            ['id' => 501, 'ktua' => 'A5EB03E21EFBF6A0E040640A040252AD', 'nama' => 'Balikpapan'],
            ['id' => 502, 'ktua' => 'A5EB03E21EFDF6A0E040640A040252AD', 'nama' => 'Banjarmasin'],
            ['id' => 503, 'ktua' => 'ff8080813ef4d8b6013ef99ec862000d', 'nama' => 'Palu'],
            ['id' => 504, 'ktua' => 'A5EB03E21EF1F6A0E040640A040252AD', 'nama' => 'Manado'],
            ['id' => 505, 'ktua' => 'A5EB03E21EE8F6A0E040640A040252AD', 'nama' => 'Gorontalo'],
            ['id' => 506, 'ktua' => 'A5EB03E21EE9F6A0E040640A040252AD', 'nama' => 'Kendari'],
            ['id' => 507, 'ktua' => 'A5EB03E21EF0F6A0E040640A040252AD', 'nama' => 'Ambon'],
            ['id' => 508, 'ktua' => 'ff8080813196bb4c0131999452280b5b', 'nama' => 'Jayapura'],
            ['id' => 600, 'ktua' => 'A5EB03E21EFBF6A0E040640A040252AD', 'nama' => 'Makassar'],
            ['id' => 601, 'ktua' => 'A5EB03E21EE8F6A0E040640A040252AD', 'nama' => 'Pare-Pare'],
            ['id' => 602, 'ktua' => 'A5EB03E21EEFF6A0E040640A040252AD', 'nama' => 'Palopo'],
            ['id' => 603, 'ktua' => 'A5EB03E21EFDF6A0E040640A040252AD', 'nama' => 'Bone'],
            ['id' => 604, 'ktua' => 'ff8080813ef4d8b6013ef99ec862000d', 'nama' => 'Kolaka'],
            ['id' => 605, 'ktua' => 'A5EB03E21EE8F6A0E040640A040252AD', 'nama' => 'Luwuk'],
            ['id' => 606, 'ktua' => 'A5EB03E21EF0F6A0E040640A040252AD', 'nama' => 'Kendari'],
            ['id' => 607, 'ktua' => 'A5EB03E21EEAF6A0E040640A040252AD', 'nama' => 'Sengkang'],
            ['id' => 608, 'ktua' => 'A5EB03E21EF4F6A0E040640A040252AD', 'nama' => 'Ternate'],
            ['id' => 609, 'ktua' => 'ff80808154dda4bf0154e0a0b6867f05', 'nama' => 'Ambon'],
            ['id' => 610, 'ktua' => 'A5EB03E21EFBF6A0E040640A040252AD', 'nama' => 'Kolaka'],
            ['id' => 611, 'ktua' => 'A5EB03E21EFBF6A0E040640A040252AD', 'nama' => 'Bone'],
            ['id' => 612, 'ktua' => 'A5EB03E21EFBF6A0E040640A040252AD', 'nama' => 'Palopo'],
            ['id' => 700, 'ktua' => 'A5EB03E21EFDF6A0E040640A040252AD', 'nama' => 'Denpasar'],
            ['id' => 701, 'ktua' => 'A5EB03E21EFFF6A0E040640A040252AD', 'nama' => 'Kupang'],
            ['id' => 703, 'ktua' => 'A5EB03E21EFEF6A0E040640A040252AD', 'nama' => 'Mataram'],
            ['id' => 704, 'ktua' => 'A5EB03E21EF4F6A0E040640A040252AD', 'nama' => 'Jember'],
            ['id' => 705, 'ktua' => 'A5EB03E21EE8F6A0E040640A040252AD', 'nama' => 'PT ASABRI'],
            ['id' => 706, 'ktua' => 'ff8080813ef4d8b6013ef99ec862000d', 'nama' => 'Sorong'],
            ['id' => 707, 'ktua' => 'A5EB03E21EF7F6A0E040640A040252AD', 'nama' => 'Tarakan'],
            ['id' => 708, 'ktua' => 'A5EB03E21EE8F6A0E040640A040252AD', 'nama' => 'Lhokseumawe'],
            ['id' => 709, 'ktua' => 'ff80808154dda4bf0154e0a0b6867f05', 'nama' => 'Ende'],
            ['id' => 710, 'ktua' => 'A5EB03E21EEAF6A0E040640A040252AD', 'nama' => 'Lubuk Linggau'],
            ['id' => 711, 'ktua' => 'A5EB03E21EE9F6A0E040640A040252AD', 'nama' => 'Kepulauan Nias'],
            ['id' => 999, 'ktua' => 'A5EB03E21EE8F6A0E040640A040252AD', 'nama' => 'Semua Kancab'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taspen');
    }
};
