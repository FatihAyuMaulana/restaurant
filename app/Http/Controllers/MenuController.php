<?php
namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index()
    {
        $foods = Menu::where('fd', 'makanan')->get();
        $drinks = Menu::where('fd', 'minuman')->get();

        // Mengirimkan menu makanan dan minuman ke view
        return view('menu', compact('foods', 'drinks'));
    }

    public function adminMenu()
    {
        $foods = Menu::where('fd', 'makanan')->get();
        $drinks = Menu::where('fd', 'minuman')->get();

        return view('admin.menu.menu', compact('foods', 'drinks'));
    }

    public function minuman()
    {
        $drinks = [
            [
                'name' => 'Es Teh',
                'description' => 'Teh dingin dengan es batu.',
                'price' => 'Rp 10.000',
                'category' => 'Drink',
                'image' => 'es_teh.jpg',
            ],
            [
                'name' => 'Jus Jeruk',
                'description' => 'Jus jeruk segar.',
                'price' => 'Rp 15.000',
                'category' => 'Drink',
                'image' => 'jus_jeruk.jpg',
            ],
            // Tambahkan minuman lainnya
        ];

        // Mengirimkan data minuman ke view admin.menu.minuman
        return view('minuman', compact('drinks'));
    }

    public function create()
    {
        $restaurants = Restaurant::all();
        return view('admin.menu.create', compact('restaurants'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            // 'restaurant_id' => 'required|exists:restaurants,id',
            'nama_makanan' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'deskripsi' => 'nullable|string',
            'kategori' => 'required|string|max:255',
            'fd' => 'required|in:makanan,minuman',
            'foto_makanan' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('foto_makanan')) {
            $filePath = $request->file('foto_makanan')->store('menu_photos', 'public');
            $validated['foto_makanan'] = $filePath;
        }

        Menu::create($validated);

        return redirect()->route('admin.menu.menu')->with('success', 'Menu added successfully');
    }


    public function edit(Menu $menu)
    {
        return view('menus.edit', compact('menu'));
    }

    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'restaurant_id' => 'required|exists:restaurants,id',
            'nama_makanan' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric',
            'kategori' => 'required|string|max:255',
            'foto_makanan' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Menyimpan foto makanan jika ada
        $path = $menu->foto_makanan;
        if ($request->hasFile('foto_makanan')) {
            // Hapus foto lama jika ada
            if ($path) {
                Storage::disk('public')->delete($path);
            }
            $path = $request->file('foto_makanan')->store('images', 'public');
        }

        $menu->update(array_merge($request->all(), ['foto_makanan' => $path]));

        return redirect()->route('menus.index')->with('success', 'Menu updated successfully.');
    }

    public function destroy(Menu $menu)
    {
        // Hapus foto jika ada
        if ($menu->foto_makanan) {
            Storage::disk('public')->delete($menu->foto_makanan);
        }
        $menu->delete();
        return redirect()->route('menus.index')->with('success', 'Menu deleted successfully.');
    }
}
