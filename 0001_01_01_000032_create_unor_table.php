<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnorTable extends Migration
{
    public function up(): void
    {
        Schema::create('unor', function (Blueprint $table) {
            $table->string('id', 36)->primary();
            $table->string('parent_id', 36)->nullable()->index();
            $table->string('nama_jabatan');
            $table->string('tingkat_unor');
            $table->string('jenis');
            $table->string('unor');
            $table->string('perangkat_daerah')->nullable();
            $table->string('bidang')->nullable();
            $table->string('sub_bidang')->nullable();
            $table->string('unit_kerja')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('unor');
    }
}
