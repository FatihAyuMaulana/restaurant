<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    // Display the menu items for users
    public function index()
    {
        $foods = Menu::where('fd', 'makanan')->get();
        $drinks = Menu::where('fd', 'minuman')->get();

        // Pass menu items to the view
        return view('menu', compact('foods', 'drinks'));
    }

    // Display the menu items for admin
    public function adminMenu()
    {
        $foods = Menu::where('fd', 'makanan')->get();
        $drinks = Menu::where('fd', 'minuman')->get();

        return view('admin.menu.menu', compact('foods', 'drinks'));
    }

    // View for drink menu items
    public function minuman()
    {
        $drinks = [
            [
                'name' => 'Es Teh',
                'description' => 'Teh dingin dengan es batu.',
                'price' => 'Rp 10.000',
                // 'category' => 'Drink',
                'image' => 'es_teh.jpg',
            ],
            [
                'name' => 'Jus Jeruk',
                'description' => 'Jus jeruk segar.',
                'price' => 'Rp 15.000',
                // 'category' => 'Drink',
                'image' => 'jus_jeruk.jpg',
            ],
            // Add other drinks here
        ];

        // Send drink data to the view
        return view('minuman', compact('drinks'));
    }

    // Show form to create a new menu item
    public function create()
    {
        $restaurants = Restaurant::all();
        return view('admin.menu.create', compact('restaurants'));
    }

    // Store a new menu item in the database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_makanan' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'deskripsi' => 'nullable|string',
            'kategori' => 'required|string|max:255',
            'fd' => 'required|in:makanan,minuman',
            'foto_makanan' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Save image if uploaded
        if ($request->hasFile('foto_makanan')) {
            $filePath = $request->file('foto_makanan')->store('menu_photos', 'public');
            $validated['foto_makanan'] = $filePath;
        }

        // Create new menu item
        Menu::create($validated);

        return redirect()->route('admin.menu.menu')->with('success', 'Menu added successfully');
    }

    // Show form to edit a menu item
    public function edit($id)
{
    $menu = Menu::findOrFail($id); // Ambil data berdasarkan ID
    return view('admin.menu.edit', compact('menu')); // Kirim data ke view
}


    public function update(Request $request, $id)
{
    $menu = Menu::findOrFail($id); // Ambil data menu berdasarkan ID

    // Validasi input
    $request->validate([
        'nama_makanan' => 'required|string|max:255',
        'deskripsi' => 'nullable|string',
        'harga' => 'required|numeric',
        'foto_makanan' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Simpan gambar baru jika ada
    $path = $menu->foto_makanan;
    if ($request->hasFile('foto_makanan')) {
        // Hapus gambar lama jika ada
        if ($path) {
            Storage::disk('public')->delete($path);
        }
        // Simpan gambar baru
        $path = $request->file('foto_makanan')->store('menu_photos', 'public');
    }

    // Update data menu
    $menu->update(array_merge($request->all(), ['foto_makanan' => $path]));

    return redirect()->route('admin.menu.menu')->with('success', 'Menu berhasil diupdate');
}


    // Update a menu item in the database
    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'nama_makanan' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric',
            'kategori' => 'required|string|max:255',
            'foto_makanan' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Save new image if uploaded
        $path = $menu->foto_makanan;
        if ($request->hasFile('foto_makanan')) {
            // Delete old image if exists
            if ($path) {
                Storage::disk('public')->delete($path);
            }
            $path = $request->file('foto_makanan')->store('menu_photos', 'public');
        }

        // Update menu item
        $menu->update(array_merge($request->all(), ['foto_makanan' => $path]));

        return redirect()->route('menu.index')->with('success', 'Menu updated successfully');
    }

    // Delete a menu item from the database
    public function delete($id)
{
    // Cari data menu berdasarkan ID
    $menu = Menu::find($id);

        // Delete the menu item
        $menu->delete();

        return redirect()->route('menu.index')->with('success', 'Menu deleted successfully');
}
}