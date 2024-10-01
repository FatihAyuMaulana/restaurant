@extends('layouts.app')  <!-- Extend layout utama jika ada -->

@section('content')
<div class="container mt-4">  <!-- Tambahkan margin-top -->
    <h1 class="mb-4">Buat Menu Baru</h1>  <!-- Tambahkan margin-bottom -->
    
    <!-- Menampilkan error jika ada -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form untuk membuat menu baru -->
    <form action="{{ route('menus.store') }}" method="POST" enctype="multipart/form-data">
        @csrf  <!-- Token CSRF untuk keamanan -->
        
        <!-- Restaurant ID -->
        <div class="form-group mb-3">  <!-- Tambahkan margin-bottom -->
            <label for="restaurant_id">Restaurant</label>
            <select name="restaurant_id" id="restaurant_id" class="form-control">
                <!-- Loop untuk restaurant_id, diasumsikan variabel restaurants sudah dikirim dari controller -->
                @foreach($restaurants as $restaurant)
                    <option value="{{ $restaurant->id }}">{{ $restaurant->nama_restoran }}</option>
                @endforeach
            </select>
        </div>

        <!-- Nama Makanan -->
        <div class="form-group mb-3">  <!-- Tambahkan margin-bottom -->
            <label for="nama_makanan">Nama Makanan</label>
            <input type="text" name="nama_makanan" class="form-control" id="nama_makanan" value="{{ old('nama_makanan') }}" required>
        </div>

        <!-- Deskripsi -->
        <div class="form-group mb-3">  <!-- Tambahkan margin-bottom -->
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3" required>{{ old('deskripsi') }}</textarea>
        </div>

        <!-- Harga -->
        <div class="form-group mb-3">  <!-- Tambahkan margin-bottom -->
            <label for="harga">Harga</label>
            <input type="number" name="harga" class="form-control" id="harga" value="{{ old('harga') }}" required>
        </div>

        <!-- Kategori -->
        <div class="form-group mb-3">  <!-- Tambahkan margin-bottom -->
            <label for="kategori">Kategori</label>
            <select name="kategori" id="kategori" class="form-control" required>
                <option value="makanan pembuka">Makanan Pembuka</option>
                <option value="makanan utama">Makanan Utama</option>
                <option value="makanan penutup">Makanan Penutup</option>
            </select>
        </div>

        <!-- Foto Makanan -->
        <div class="form-group mb-4">  <!-- Tambahkan margin-bottom -->
            <label for="foto_makanan">Foto Makanan</label>
            <input type="file" name="foto_makanan" class="form-control-file" id="foto_makanan" required>
        </div>

        <!-- Tombol Submit -->
        <button type="submit" class="btn btn-primary">Simpan Menu</button>
    </form>
</div>
@endsection
