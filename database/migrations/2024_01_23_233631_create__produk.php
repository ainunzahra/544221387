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
        Schema::create('_Produk', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('ProdukID');
            $table->char('Namaproduk');
            $table->integer('Harga');
            $table->integer('KategoriID');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_produk');
    }
};
