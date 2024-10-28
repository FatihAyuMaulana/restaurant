<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::insert([
            [
                'nama_makanan' => 'Beef Premium BIM',
                'deskripsi' => 'Sensasi Daging Berkualitas dengan Rasa yang Tak Tertandingi.',
                'harga' => 500000,
                'kategori' => 'Main Course',
                'foto_makanan' => 'menu_photos/steak4.jpg',
                'fd' => 'makanan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_makanan' => 'Nasi Liwet Nusantara',
                'deskripsi' => 'Perpaduan Rasa Klasik dengan Sajian Tradisional.',
                'harga' => 65000,
                'kategori' => 'Main Course',
                'foto_makanan' => 'menu_photos/Nasi Liwet.jpg',
                'fd' => 'makanan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_makanan' => 'Ocean Blue Hawaii',
                'deskripsi' => 'Kesegaran Laut dalam Setiap Tegukan.',
                'harga' => 35000,
                'kategori' => 'Drink',
                'foto_makanan' => 'menu_photos/ocean blue.jpg',
                'fd' => 'minuman',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_makanan' => 'Cappuccino Klasik BIM',
                'deskripsi' => 'Kenikmatan Kopi dengan Sentuhan Krim.',
                'harga' => 35000,
                'kategori' => 'Drink',
                'foto_makanan' => 'menu_photos/kopi.jpg',
                'fd' => 'minuman',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_makanan' => 'Blackberry Thyme Lemonade',
                'deskripsi' => 'Minuman Segar dengan Rasa Alami yang Memikat.',
                'harga' => 60000,
                'kategori' => 'Drink',
                'foto_makanan' => 'menu_photos/blackberry thyme lemonade.jpg',
                'fd' => 'minuman',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_makanan' => 'Matcha Bliss',
                'deskripsi' => 'Kesejukan dan Kelezatan Teh Hijau dalam Segelas.',
                'harga' => 45000,
                'kategori' => 'Drink',
                'foto_makanan' => 'menu_photos/matcha bliss.jpg',
                'fd' => 'minuman',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);

    }
}
