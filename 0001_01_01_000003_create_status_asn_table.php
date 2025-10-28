<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateStatusAsnTable extends Migration
{
    public function up()
    {
        Schema::create('status_asn', function (Blueprint $table) {
            $table->id();
            $table->string('nama_status')->unique();
            $table->timestamps();
        });

        // Insert default values
        DB::table('status_asn')->insert([
            ['id' => 1, 'nama_status' => 'PNS'],
            ['id' => 2, 'nama_status' => 'PPPK'],
            ['id' => 3, 'nama_status' => 'CPNS'],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('status_asn');
    }
}


