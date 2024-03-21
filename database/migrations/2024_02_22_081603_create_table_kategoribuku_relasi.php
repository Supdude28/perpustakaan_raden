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
        Schema::create('table_kategoribuku_relasi', function (Blueprint $table) {
            $table->integer('KategoriBukuID');
            $table->integer('BukuID');
            $table->integer('KategoriID');
            $table->timestamps();
            $table->primary('KategoriBukuID');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_kategoribuku_relasi');
    }
};
