@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <br>
    <br>
    <br>
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

        <!-- Category Field
        <div class="form-group">
        <label for="kategori">Kategori</label>
        <input type="text" name="kategori" id="kategori" class="form-control" value="{{ old('kategori', $menu->kategori) }}" required>

        </div> -->

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
<style>/* Body Styling */
    body {
        background-color: #fef8f4; /* Latar belakang oranye pastel lembut */
        font-family: 'Poppins', sans-serif;
        color: #333;
        margin: 0;
        padding: 0;
    }
    
    /* Container Styling */
    .container {
        margin-top: 30px;
    }
    
    /* Form Title */
    h2 {
        font-size: 2rem;
        font-weight: bold;
        color: #ff914d; /* Warna oranye pastel untuk judul */
        text-align: center;
        margin-bottom: 30px;
    }
    
    /* Form Styling */
    form {
        background-color: #fff5ec; /* Latar belakang form oranye pastel */
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 30px;
    }
    
    /* Input Fields Styling */
    .form-group {
        margin-bottom: 20px;
    }
    
    .form-group label {
        font-size: 1rem;
        font-weight: bold;
        color: #333;
    }
    
    .form-control {
        background-color: #fffaf4; /* Warna latar belakang input */
        border: 1px solid #ffddc1;
        border-radius: 10px;
        padding: 10px;
        font-size: 1rem;
        width: 100%;
        transition: border-color 0.3s ease;
    }
    
    .form-control:focus {
        border-color: #ff914d;
        box-shadow: 0 0 5px rgba(255, 145, 77, 0.5);
    }
    
    /* Button Styling */
    .btn {
        border-radius: 50px;
        font-size: 1rem;
        font-weight: bold;
        padding: 12px 25px;
        transition: transform 0.3s ease-in-out;
    }
    
    .btn-success {
        background-color: #ff914d; /* Warna oranye pastel */
        color: white;
        border: none;
    }
    
    .btn-success:hover {
        background-color: #ff7f3f;
        transform: scale(1.05);
    }
    
    .btn-secondary {
        background-color: #ffa85c;
        color: white;
        border: none;
        margin-left: 15px;
    }
    
    .btn-secondary:hover {
        background-color: #ff8c42;
        transform: scale(1.05);
    }
    
    /* Image Preview */
    .mt-2 img {
        width: 100px;
        border-radius: 10px;
    }
    
    /* Hover Effect for Inputs */
    .form-control:hover {
        border-color: #ff914d;
    }
    
    /* Responsive Design */
    @media (max-width: 768px) {
        h2 {
            font-size: 1.5rem;
        }
    
        .form-control {
            font-size: 0.9rem;
            padding: 8px;
        }
    
        .btn {
            font-size: 0.9rem;
            padding: 10px 20px;
        }
    }
    </style>
@endsection
