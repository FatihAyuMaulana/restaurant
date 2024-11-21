@extends('layouts.app')

@section('content')

<h1 class="page-title">Daftar Message</h1>

<!-- Tombol Kembali ke Home -->
<a href="{{ route('home') }}" class="btn btn-secondary mb-3">
    <!-- Ikon Panah Kiri -->
    <i class="fas fa-arrow-left"></i> Kembali
</a>


<table class="contact-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Pesan</th>
            <th>Dikirim pada</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contacts as $contact)
        <tr>
            <td>{{ $contact->id }}</td>
            <td>{{ $contact->username }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->isi_pesan }}</td>
            <td>{{ $contact->created_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection

@push('styles')
<style>
    /* Gaya umum untuk halaman */
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 20px;
    }

    .page-title {
        color: #333;
        font-size: 2em;
        margin-bottom: 20px;
    }

    /* Tombol Kembali ke Home */
    .back-btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #db5050;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        margin-bottom: 20px;
        font-size: 1em;
    }

    .back-btn:hover {
        background-color: #db5050;
    }

    /* Desain Tabel */
    table {
        width: 100%;
        border-collapse: collapse;
        background-color: #ffffff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
        border: 2px solid #ddd; /* Menambahkan garis tepi pada tabel */
    }

    table th, table td {
        padding: 12px;
        text-align: left;
        border: 1px solid #ddd; /* Garis tepi pada cell */
    }

    table th {
        background-color: #ff5600;
        color: white;
    }

    table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    table tr:hover {
        background-color: #f1f1f1;
    }

    /* Responsif */
    @media (max-width: 768px) {
        table {
            font-size: 0.9em;
        }
        table th, table td {
            padding: 8px;
        }
    }
</style>
@endpush