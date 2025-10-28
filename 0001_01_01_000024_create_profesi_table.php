<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesiTable extends Migration
{
    public function up(): void
    {
        Schema::create('profesi', function (Blueprint $table) {
            $table->string('id', 32)->primary(); 
            $table->string('nama'); 
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('profesi');
    }
}