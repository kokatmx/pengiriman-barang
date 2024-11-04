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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->unique();
            $table->string('detail_pengiriman');
            $table->string('penerima');
            $table->unsignedBigInteger('barang');
            $table->enum('status', ['terkirim', 'diproses', 'dalam_perjalanan'])->default('diproses');
            $table->timestamps();

            $table->foreign('barang')->references('nama_barang')->on('items')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
