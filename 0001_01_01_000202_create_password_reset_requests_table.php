<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasswordResetRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('password_reset_requests', function (Blueprint $table) {
            $table->id();

            // FK opsional ke users (lebih stabil daripada FK ke nik/nip)
            $table->foreignId('user_id')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            // identifier opsional (TIDAK sebagai FK)
            $table->string('nip', 32)->nullable()->index();
            $table->string('email', 191)->nullable()->index();

            // token & expiry
            $table->string('token', 500)
                ->unique()
                ->comment('Encrypted reset token');
            $table->timestamp('expires_at');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('password_reset_requests');
    }
}
