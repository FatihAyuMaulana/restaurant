@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Menu Item</h2>
    <form action="{{ route('admin.menu.update',  $menu->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- Name Field -->
        <div class="form-group">
            <label for="nama_makanan">Nama Makanan</label>
            <input type="text" name="nama_makanan" id="nama_makanan" class="form-control" value="{{ old('nama_makanan', $menu->nama_makanan) }}" required>
        </div>

        <!-- Description Field -->
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control">{{ old('deskripsi', $menu->deskripsi) }}</textarea>
        </div>

        <!-- Price Field -->
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" name="harga" id="harga" class="form-control" value="{{ old('harga', $menu->harga) }}" required>
        </div>

        <!-- Category Field -->
        {{-- <div class="form-group">
            <label for="kategori">Kategori</label>
            <input type="text" name="kategori" id="kategori" class="form-control" value="{{ old('kategori', $menu->kategori) }}" required>
        </div> --}}

        <!-- Food or Drink Selection -->
        <div class="form-group">
            <label for="fd">Tipe</label>
            <select name="fd" id="fd" class="form-control">
                <option value="makanan" {{ $menu->fd == 'makanan' ? 'selected' : '' }}>Makanan</option>
                <option value="minuman" {{ $menu->fd == 'minuman' ? 'selected' : '' }}>Minuman</option>
            </select>
        </div>

        <!-- Photo Field -->
        <div class="form-group">
            <label for="foto_makanan">Foto Makanan</label>
            <input type="file" name="foto_makanan" id="foto_makanan" class="form-control">
            @if($menu->foto_makanan)
                <div class="mt-2">
                    <img src="{{ asset('storage/'.$menu->foto_makanan) }}" alt="Current Image" style="width: 100px;">
                </div>
            @endif
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-success">update Menu</button>
        <a href="{{ route('admin.menu.menu') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
