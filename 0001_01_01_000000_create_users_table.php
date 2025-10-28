<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * CREATE TABLE users 
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            // Core user info
            $table->string('asn_id')->nullable()->unique()->comment('ASN ID dari data_asn');
            $table->string('username')->nullable()->unique()->comment('NIP untuk login');
            $table->string('password');

            // Role
            $table->enum('role', [
                'superadmin',
                'admin_utama',
                'admin_psb',
                'admin_opd',
                'admin_upt',
                'admin_sekolah',
                'user'
            ])->default('user')->comment('Role berdasarkan posisi UNor');

            // Status & metadata
            $table->boolean('is_active')->default(true);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('google2fa_secret')->nullable();

            // Last login 
            $table->timestamp('last_login_at')->nullable();

            $table->rememberToken();
            $table->timestamps();

            // INDEX tambahan seperlunya
            $table->index(['role', 'is_active']);
            $table->index('last_login_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
