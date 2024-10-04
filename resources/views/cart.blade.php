@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Your Cart</h2>
        @if(session('cart'))
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(session('cart') as $id => $details)
                        <tr>
                            <td>{{ $details['name'] }}</td>
                            <td>{{ $details['quantity'] }}</td>
                            <td>{{ $details['price'] }}</td>
                            <td><img src="{{ asset('images/'.$details['image']) }}" width="50" height="50" alt="{{ $details['name'] }}"></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Your cart is empty.</p>
        @endif
    </div>
@endsection
