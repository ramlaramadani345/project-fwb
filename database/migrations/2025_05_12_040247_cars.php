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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rental_id')->constrained('rentals')->onDelete('cascade');
            $table->string('nama_mobil');
            $table->string('slug');
            $table->integer('harga_sewa');
            $table->string('gambar');
            $table->string('bahan_bakar');
            $table->integer('jumlah_kursi');
            $table->string('transmisi');
            $table->string('status'); 
            $table->text('deskripsi');
            $table->boolean('p3k');
            $table->boolean('charger');
            $table->boolean('ac');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};