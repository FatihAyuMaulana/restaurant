<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id(); // Secara default ini membuat kolom 'id' sebagai Primary Key
            // $table->foreignId('restaurant_id')->constrained('restaurants')->onDelete('cascade'); // Foreign Key ke tabel restaurants
            $table->string('nama_makanan'); // Nama makanan
            $table->text('deskripsi')->nullable(); // Deskripsi makanan
            $table->decimal('harga', 8, 2); // Harga makanan
            // $table->string('kategori'); // Kategori makanan: pembuka, utama, penutup
            $table->string('foto_makanan')->nullable(); // Path untuk foto makanan
            $table->enum('fd', ['makanan','minuman']);
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('menus');
    }
};