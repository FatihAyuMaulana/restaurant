<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tgl_transaksi',
        'status',
        'deskripsi',
        'total_harga'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

