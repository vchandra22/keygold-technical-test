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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->index();
            $table->string('nama_produk')->nullable();
            $table->text('deskripsi_produk')->nullable();
            $table->string('merek')->nullable();
            $table->float('berat')->nullable();
            $table->float('harga_jual')->nullable();
            $table->integer('total_stock')->nullable();
            $table->enum('status', ['tersedia', 'habis'])->default('tersedia')->nullable();
            $table->string('gambar')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->string('og_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
