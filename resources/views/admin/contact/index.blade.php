@extends('layouts.app')

@section('content')

<br>
<br>
<br>
<br>
<br>
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
    background-color: #fdf4f1; /* Oranye pastel lembut */
    margin: 0;
    padding: 20px;
}

.page-title {
    color: #ff5600;
    font-size: 2em;
    font-weight: bold;
    text-align: center;
    margin-bottom: 20px;
}

/* Tombol Kembali ke Home */
.btn-secondary {
    display: inline-block;
    padding: 10px 20px;
    background-color: #ff7849; /* Oranye pastel untuk tombol */
    color: white;
    text-decoration: none;
    border-radius: 25px; /* Membuat tombol melengkung */
    font-size: 1em;
    font-weight: bold;
    transition: all 0.3s ease;
    border: none;
}

.btn-secondary:hover {
    background-color: #ff5600;
    transform: scale(1.05); /* Efek zoom */
}

/* Desain Tabel */
.contact-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0 10px; /* Memberikan jarak antar baris */
    background-color: #ffffff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
    border-radius: 10px; /* Membuat tabel melengkung */
    overflow: hidden;
    border: 2px solid #ffcca5; /* Garis tepi oranye pastel */
}

.contact-table th,
.contact-table td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ffcca5;
}

.contact-table th {
    background-color: #ff7849; /* Warna header oranye pastel */
    color: white;
    font-weight: bold;
    text-align: center;
}

.contact-table tr:nth-child(even) {
    background-color: #fef3ed; /* Warna latar untuk baris genap */
}

.contact-table tr:hover {
    background-color: #ffeee4; /* Efek hover */
    transition: background-color 0.3s ease;
}

.contact-table td {
    color: #333;
}

/* Responsif */
@media (max-width: 768px) {
    .contact-table {
        font-size: 0.9em;
    }

    .contact-table th,
    .contact-table td {
        padding: 10px;
    }
}

</style>
@endpush