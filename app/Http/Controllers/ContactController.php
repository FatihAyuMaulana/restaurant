<?php 
namespace App\Http\Controllers;

use App\Models\Restaurant; // Assuming you have a Restaurant model
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContactForm()
{
    $restaurants = Restaurant::all(); // Mengambil semua cabang restoran
    return view('contact', compact('restaurants')); // Menggunakan nama variabel yang benar
}


    public function submitContactForm(Request $request)
    {
        $request->validate([
            'restaurant_id' => 'required|exists:restaurants,id',
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'isi_pesan' => 'required|string',
        ]);

        // Here, you can save the message or send an email
        // Example:
        // Message::create($request->all());

        return redirect()->route('contact.form')->with('success', 'Your message has been sent successfully!');
    }
}
