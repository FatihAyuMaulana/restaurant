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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('nama_cabang'); // Nama cabang restoran
            $table->string('alamat'); // Alamat restoran
            $table->string('no_telp'); // Nomor telepon restoran
            $table->string('foto_restaurant')->nullable(); // Path untuk foto restoran
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('restaurants');
    }
};