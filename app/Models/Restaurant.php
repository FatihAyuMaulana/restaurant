<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $table = 'restaurants';

    // Kolom yang dapat diisi massal
    protected $fillable = [
        'nama_cabang',
        'alamat',
        'no_telp',
        'foto_restaurant',
    ];
}
