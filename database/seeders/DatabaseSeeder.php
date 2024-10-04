<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Memanggil UserSeeder untuk memasukkan data user
        $this->call(UserSeeder::class);
        
        // Atau jika kamu ingin tetap menggunakan factory:
        // User::factory(10)->create();
        
        // Membuat user dengan factory
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
