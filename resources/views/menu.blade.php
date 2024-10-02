@extends('layouts.app')

@section('content')
    <br>
    <br>
    <br>
    <h1 style="text-align: center; margin-top: 20px;">Menu Makanan</h1>

    <div class="menu-grid fade-in">
        @foreach($menus as $item)
            <div class="menu-card">
                <img src="{{ asset('images/' . $item['image']) }}" alt="{{ $item['name'] }}">
                <div class="menu-info">
                    <h3>{{ $item['name'] }}</h3>
                    <p>{{ $item['description'] }}</p>
                    <p><strong>Harga:</strong> {{ $item['price'] }}</p>
                    <p><strong>Kategori:</strong> {{ $item['category'] }}</p>
                    <button class="btn">Order Now</button>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@push('styles')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
    }

    h1 {
        color: #333;
        font-size: 2rem;
        margin-bottom: 40px;
    }

    /* Grid container */
    .menu-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        padding: 20px;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Card style */
    .menu-card {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s ease;
    }

    .menu-card:hover {
        transform: translateY(-5px);
    }

    .menu-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .menu-info {
        padding: 20px;
        text-align: center;
    }

    .menu-info h3 {
        font-size: 1.5rem;
        color: #333;
        margin-bottom: 10px;
    }

    .menu-info p {
        font-size: 1rem;
        color: #666;
        margin-bottom: 8px;
    }

    .btn {
        padding: 8px 16px;
        background-color: #28a745;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: #218838;
    }

    /* Fade-in animation */
    .fade-in {
        opacity: 0;
        animation: fadeInAnimation 1s forwards;
    }

    @keyframes fadeInAnimation {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    // Animasi fade-in untuk grid
    const grid = document.querySelector('.fade-in');
    grid.style.animationDelay = '0.5s';
</script>
@endpush
