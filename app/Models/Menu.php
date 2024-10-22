<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menus'; // Ganti 'menu' menjadi 'menus'

    protected $fillable = [
        // 'restaurant_id',
        'nama_makanan',
        'deskripsi',
        'harga',
        // 'kategori',
        'foto_makanan',
        'fd',
    ];

    // public function restaurant()
    // {
    //     return $this->belongsTo(Restaurant::class, 'restaurant_id'); // Relasi ke model Restaurant
    // }
}
