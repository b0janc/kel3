<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Gunakan ENUM dengan nilai yang sesuai dengan yang digunakan di aplikasi
            $table->enum('role', ['admin', 'kasir'])
                  ->default('kasir')
                  ->after('password');
            
            // Tambahkan index untuk mempercepat query berdasarkan role
            $table->index('role');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role');
        });
    }
};