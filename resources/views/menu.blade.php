@extends('layouts.app')

@section('content')

<br>
<br>
<br>
<br>
    <h1>Menu</h1>
    {{-- <a href="{{ route('menus.create') }}">Add Menu</a> --}}
    <table>
        <tr>
            <th>Nama Makanan</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Kategori</th>
            <th>Foto Makanan</th>
            <th>Actions</th>
        </tr>
        @foreach ($menus as $menu)
            <tr>
                <td>{{ $menu->nama_makanan }}</td>
                <td>{{ $menu->deskripsi }}</td>
                <td>{{ $menu->harga }}</td>
                <td>{{ $menu->kategori }}</td>
                <td>
                    @if ($menu->foto_makanan)
                        <img src="{{ asset('storage/' . $menu->foto_makanan) }}" alt="{{ $menu->nama_makanan }}" width="100">
                    @endif
                </td>
                <td>
                    <a href="{{ route('menus.edit', $menu) }}">Edit</a>
                    <form action="{{ route('menus.destroy', $menu) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
