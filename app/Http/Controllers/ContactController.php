<?php 
namespace App\Http\Controllers;

use App\Models\Restaurant; // Assuming you have a Restaurant model
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all(); // Mengambil semua cabang restoran
        return view('contact', compact('restaurants'));
    }

    public function create()
    {
        $restaurants = Restaurant::all(); // Mengambil semua cabang restoran
        return view('contact.create', compact('restaurants')); // Render the create form
    }

    public function store(Request $request)
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

    public function submitContactForm(Request $request)
    {
        // You may want to keep this method for handling submissions if it serves a different purpose
        return $this->store($request);
    }
}
