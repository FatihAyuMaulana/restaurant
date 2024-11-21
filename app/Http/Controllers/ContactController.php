<?php

namespace App\Http\Controllers;

use App\Models\Restaurant; // Assuming you have a Restaurant model
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Menampilkan halaman formulir kontak.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Menyimpan pesan kontak dan mengirim email ke admin.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'restaurant_id' => 'required|exists:restaurants,id',
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Simpan kontak ke database
        $contact = Contact::create([
            'username' => $request->username,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        // Kirim email ke admin
        Mail::raw("Pesan baru dari {$request->username} ({$request->email}): {$request->message}", function ($message) {
            $message->to('admin@example.com')  // Ganti dengan email admin Anda
                    ->subject('Pesan Kontak Baru');
        });

        // Redirect kembali ke halaman kontak dengan pesan sukses
        return redirect()->route('contact.create')->with('success', 'Pesan Anda telah berhasil dikirim.');
    }
}
