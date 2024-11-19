@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Your Cart</h2>

        @if (session('cart'))
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (session('cart') as $id => $details)
                        <tr>
                            <td>{{ $details['name'] }}</td>
                            <td>
                                <!-- Button + and - to adjust quantity -->
                                <form action="{{ route('cart.update', $id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" name="quantity" value="{{ $details['quantity'] - 1 }}"
                                        class="btn btn-secondary btn-md" style="font-size: 16px; padding: 10px 20px;"
                                        {{ $details['quantity'] == 1 ? 'disabled' : '' }}>
                                        -
                                    </button>
                                </form>
                                {{ $details['quantity'] }}
                                <form action="{{ route('cart.update', $id) }}" method="POST"
                                    style="display: inline-block;">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" name="quantity" value="{{ $details['quantity'] + 1 }}"
                                        class="btn btn-secondary btn-md" style="font-size: 16px; padding: 10px 20px;">
                                        +
                                    </button>
                                </form>
                            </td>
                            <td>{{ number_format($details['price'], 0, ',', '.') }}</td>
                            <td>{{ number_format($details['price'] * $details['quantity'], 0, ',', '.') }}</td>
                            <td>

    <!-- Tombol Checkout -->
    <div class="text-center mb-2">
        <a href="{{ route('menu') }}" class="btn btn-secondary">Menu</a>
                                <!-- Tombol Delete untuk menghapus item dari keranjang -->
                                <a href="{{ route('cart.remove', $id) }}" class="btn btn-danger">Delete</a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Tombol Checkout -->
            <div class="text-center mb-2">

                <a href="{{ route('cart.checkout') }}" class="btn btn-primary">Checkout</a>
            </div>
        @else
            <p>Your cart is empty.</p>
        @endif
    </div>
@endsection
