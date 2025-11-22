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
        Schema::table('products', function (Blueprint $table) {
            // Kolom 'gambar' sudah ada di migration utama, jadi tidak perlu ditambah lagi.
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // Hanya drop kolom jika kolom 'gambar' memang ada
            if (Schema::hasColumn('products', 'gambar')) {
                $table->dropColumn('gambar');
            }
        });
    }
};
