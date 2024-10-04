<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function gourmetSpot()
    {
        // Misalnya kita ambil semua data cabang dari database
        $branches = [
            ['name' => 'BIM Gourmet Spot 1', 'location' => 'Jakarta'],
            ['name' => 'BIM Gourmet Spot 2', 'location' => 'Surabaya'],
            ['name' => 'BIM Gourmet Spot 3', 'location' => 'Bali'],
        ];

        return view('gourmet_spot', compact('branches'));
    }
}

