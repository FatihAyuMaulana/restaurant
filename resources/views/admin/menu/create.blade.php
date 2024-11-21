@extends('layouts.app')

@section('content')
<br>
<br>
<br>

<div class="container">
    <h1>Add New Menu</h1>

    <!-- Display validation errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Menu creation form -->
    <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Restaurant ID -->
        {{-- <div class="mb-3">
            <label for="restaurant_id" class="form-label">Restaurant</label>
            <select class="form-control" id="restaurant_id" name="restaurant_id" required>
                @foreach ($restaurants as $restaurant)
                    <option value="{{ $restaurant->id }}">{{ $restaurant->name }}</option>
                @endforeach
            </select>
        </div> --}}

        <!-- Nama Makanan -->
        <div class="mb-3">
            <label for="nama_makanan" class="form-label">Nama Makanan</label>
            <input type="text" class="form-control" id="nama_makanan" name="nama_makanan" value="{{ old('nama_makanan') }}" required>
        </div>

        <!-- Harga -->
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" step="0.01" value="{{ old('harga') }}" required>
        </div>

        <!-- Kategori -->
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <input type="text" class="form-control" id="kategori" name="kategori" value="{{ old('kategori') }}" required>
        </div>

        <!-- Deskripsi -->
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi">{{ old('deskripsi') }}</textarea>
        </div>

        <!-- Foto Makanan -->
        <div class="mb-3">
            <label for="foto_makanan" class="form-label">Foto Makanan</label>
            <input type="file" class="form-control" id="foto_makanan" name="foto_makanan">
        </div>

        <!-- Makanan or Minuman -->
        <div class="mb-3">
            <label for="fd" class="form-label">Jenis Menu</label>
            <select class="form-control" id="fd" name="fd" required>
                <option value="spesial">Spesial</option>
                <option value="makanan">Makanan</option>
                <option value="minuman">Minuman</option>
                <option value="dessert">Dessert</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Simpan Menu</button>
        <a href="{{ url()->previous() }}" class="btn btn-secondary">Kembali</a>
        <br>
        <br>
        <br>
    </form>
</div>
@endsection
