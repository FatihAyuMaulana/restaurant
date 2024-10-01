<?php
namespace App\Http\Controllers;

use App\Models\Menu;
// use App\Http\Controllers\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('menu', compact('menus'));
    }

    public function create()
    {
        return view('menus.create');
    }

    public function store(Request $request)
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
        $path = null;
        if ($request->hasFile('foto_makanan')) {
            $path = $request->file('foto_makanan')->store('images', 'public');
        }

        Menu::create(array_merge($request->all(), ['foto_makanan' => $path]));

        return redirect()->route('menus.index')->with('success', 'Menu created successfully.');
    }

    public function edit(Menu $menu)
    {
        return view('menus.edit', compact('menus'));
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
