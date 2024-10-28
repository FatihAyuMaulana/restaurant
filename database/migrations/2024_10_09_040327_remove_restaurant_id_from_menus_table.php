<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveRestaurantIdFromMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('menus', function (Blueprint $table) {
        //     $table->dropForeign(['restaurant_id']); // Drop foreign key constraint
        //     $table->dropColumn('restaurant_id'); // Drop the column
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('menus', function (Blueprint $table) {
        //     $table->foreignId('restaurant_id')->constrained('restaurants')->onDelete('cascade'); // Add the column back with the foreign key
        // });
    }
}
