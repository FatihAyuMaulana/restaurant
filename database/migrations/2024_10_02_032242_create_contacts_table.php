<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id(); // ID primary key
            $table->foreignId('restaurant_id')->constrained('restaurants')->onDelete('cascade'); // Foreign Key ke tabel restaurants
            $table->string('username'); // Nama pengguna
            $table->string('email'); // Email pengguna
            $table->text('isi_pesan'); // Pesan kontak
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
