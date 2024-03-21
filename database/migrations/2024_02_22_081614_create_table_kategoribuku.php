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
        Schema::create('table_kategoribuku', function (Blueprint $table) {
            $table->integer('KategoriID');
            $table->integer('NomorKategori');
            $table->timestamps();
            $table->primary('KategoriID');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_kategoribuku');
    }
};
