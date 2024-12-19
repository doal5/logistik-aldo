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
        Schema::create('tb_barang_proses', function (Blueprint $table) {
            $table->id();
            $table->integer('no_kode_barang')->unique();
            $table->string('kode_barang');
            $table->integer('quantity');
            $table->string('asal_barang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_barang_proses');
    }
};
