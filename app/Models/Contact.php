<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contact'; // Ganti 'menu' menjadi 'menus'

    protected $fillable = [
        'restaurant_branch',
        'username',
        'email_address',
        'message',
    ];
}
