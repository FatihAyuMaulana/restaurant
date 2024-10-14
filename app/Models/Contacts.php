<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;

    protected $table = 'contacts'; // Ganti 'menu' menjadi 'menus'

    protected $fillable = [
        // 'restaurant_id',
        'username',
        'email',
        'isi_pesan',
    ];

    // public function restaurant()
    // {
    //     return $this->belongsTo(Restaurant::class, 'restaurant_id'); // Relasi ke model Restaurant
    // }
}
