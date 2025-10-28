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
        Schema::create('jenis_pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->unique();
            $table->timestamps();
        });

        // Isi data default
        DB::table('jenis_pegawai')->insert([
            ['id' => 1, 'nama' => 'PNS Pusat yang bekerja pada Departemen/Lembaga'],
            ['id' => 2, 'nama' => 'PNS Pusat DPB pada Instansi lain'],
            ['id' => 3, 'nama' => 'PNS Pusat DPK pada Instansi lain'],
            ['id' => 4, 'nama' => 'PNS Pusat DPB pada Pemerintah Propinsi'],
            ['id' => 5, 'nama' => 'PNS Pusat DPK pada Pemerintah Propinsi'],
            ['id' => 6, 'nama' => 'PNS Pusat DPB pada Pemerintah Kabupaten/Kota'],
            ['id' => 7, 'nama' => 'PNS Pusat DPK pada Pemerintah Kabupaten/Kota'],
            ['id' => 8, 'nama' => 'PNS Pusat DPB pada BUMN/Badan lain'],
            ['id' => 9, 'nama' => 'PNS Pusat DPK pada BUMN/Badan lain'],
            ['id' => 10, 'nama' => 'PNS Daerah Propinsi yang bekerja pada Propinsi'],
            ['id' => 11, 'nama' => 'PNS Daerah Propinsi DPB pada Instansi lain'],
            ['id' => 12, 'nama' => 'PNS Daerah Propinsi DPK pada Instansi lain'],
            ['id' => 13, 'nama' => 'PNS Daerah Propinsi DPB pada BUMN/BUMD'],
            ['id' => 14, 'nama' => 'PNS Daerah Propinsi DPK pada BUMN/BUMD'],
            ['id' => 15, 'nama' => 'PNS Daerah Kab./Kota yang bekerja pada Kab./Kota'],
            ['id' => 16, 'nama' => 'PNS Daerah Kab./Kota DPB pada Instansi lain'],
            ['id' => 17, 'nama' => 'PNS Daerah Kab./Kota DPK pada Instansi lain'],
            ['id' => 18, 'nama' => 'PNS Daerah Kab./Kota DPB pada BUMN/BUMD'],
            ['id' => 19, 'nama' => 'PNS Daerah Kab./Kota DPK pada BUMN/BUMD'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_pegawai');
    }
};
