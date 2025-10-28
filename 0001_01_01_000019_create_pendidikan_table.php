<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendidikanTable extends Migration
{
    public function up(): void
    {
        Schema::create('pendidikan', function (Blueprint $table) {
            $table->uuid('id')->primary();   
            $table->string('nama'); 
            $table->unsignedBigInteger('tingkat_pendidikan_id');
            $table->foreign('tingkat_pendidikan_id')
                  ->references('id')->on('tingkat_pendidikan')
                  ->onDelete('cascade');  
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pendidikan');
    }
};