@extends('layouts.app')

@section('content')
    <br>
    <br>
    <br>            

    <h1 style="text-align: center; margin-top: 20px;">Menu Minuman</h1>

    <div class="menu-grid fade-in">
        @foreach($drinks as $drink)
            <div class="menu-item">
                <img src="{{ asset('images/' . $drink['image']) }}" alt="{{ $drink['name'] }}">
                <h3>{{ $drink['name'] }}</h3>
                <p>{{ $drink['description'] }}</p>
                <p>Harga: {{ $drink['price'] }}</p>
                {{-- <a href="{{ route('order', ['id' => $drink['id']]) }}" class="order-button">Order Now</a> --}}
            </div>
        @endforeach
    </div>

@endsection

@push('styles')
<style>
    .menu-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 20px;
        margin: 20px;
        opacity: 0;
        animation: fadeIn 1s forwards;
    }

    .menu-item {
        border: 1px solid #ddd;
        padding: 20px;
        text-align: center;
        background-color: #fff;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .menu-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .menu-item img {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 50%;
        margin-bottom: 15px;
        transition: transform 0.3s ease;
    }

    .menu-item:hover img {
        transform: scale(1.1);
    }

    .menu-item h3 {
        font-size: 20px;
        margin: 15px 0;
        color: #333;
    }

    .menu-item p {
        font-size: 16px;
        color: #777;
    }

    .order-button {
        display: inline-block;
        margin-top: 10px;
        padding: 10px 20px;
        background-color: #ff6f61;
        color: #fff;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .order-button:hover {
        background-color: #e55a4e;
    }

    @keyframes fadeIn {
        0% { opacity: 0; transform: translateY(20px); }
        100% { opacity: 1; transform: translateY(0); }
    }
</style>
@endpush

@push('scripts')
<script>
    // Animasi fade-in untuk grid
    document.addEventListener('DOMContentLoaded', function() {
        const grid = document.querySelector('.fade-in');
        grid.style.opacity = '1';
    });
</script>
@endpush
