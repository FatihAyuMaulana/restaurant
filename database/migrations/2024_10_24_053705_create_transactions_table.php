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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Foreign key untuk user
            $table->dateTime('tgl_transaksi'); // Kolom untuk tanggal transaksi
            $table->string('status')->default('success'); // Status default 'success'
            $table->text('deskripsi'); // Menyimpan menu yang dipesan, harga, jumlah, dan total harga
            $table->bigInteger('total_harga'); // Menyimpan total harga
            $table->timestamps(); // Menambahkan created_at dan updated_at

            // Set foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
