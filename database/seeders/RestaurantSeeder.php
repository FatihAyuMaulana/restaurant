<?php 

use Illuminate\Database\Seeder;
use App\Models\Restaurant; // Ensure you have a Restaurant model

class RestaurantSeeder extends Seeder
{
    public function run()
    {
        Restaurant::create(['name' => 'Branch 1', 'location' => 'Location 1']);
        Restaurant::create(['name' => 'Branch 2', 'location' => 'Location 2']);
        // Add more branches as needed
        $this->call(RestaurantSeeder::class);
    }
}
