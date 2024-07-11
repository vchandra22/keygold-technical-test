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
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->index();
            $table->unsignedBigInteger('transaksi_id')->nullable();
            $table->unsignedBigInteger('produk_id')->nullable();
            $table->integer('total_pemesanan')->nullable();
            $table->float('total_harga')->nullable();
            $table->timestamps();

            $table->foreign('transaksi_id')->references('id')->on('transactions')->onDelete('cascade');
            $table->foreign('produk_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_details');
    }
};
