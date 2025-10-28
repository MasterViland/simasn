<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKpknTable extends Migration
{
    public function up(): void
    {
        Schema::create('kpkn', function (Blueprint $table) {
            $table->string('id', 32)->primary(); 
            $table->string('nama');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kpkn');
    }
}