@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Manage User') }}</div>

                <div class="text-left mb-2 mt-2 ml-2">
                    <!-- Tombol Back -->
                    <button onclick="window.history.back()" class="btn btn-secondary ml-2">Back</button>
                    
                    <a href="{{ route('user.create') }}" class="btn btn-secondary">Add</a>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">
                                        <!-- Ikon Edit untuk Edit -->
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    
                                    <form action="{{ route('user.delete', $user->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <!-- Ikon Trash untuk Delete -->
                                            <i class="fas fa-trash-alt"></i> Delete
                                        </button>
                                        
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Body Styling */
body {
    background-color: #fef8f4; /* Oranye pastel untuk latar belakang */
}

/* Card Styling */
.card {
    border-radius: 20px; /* Membuat sudut melengkung */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Memberikan efek bayangan */
    background-color: #fff5ec; /* Oranye pastel lembut */
    overflow: hidden; /* Agar konten tetap di dalam area melengkung */
}

/* Card Header */
.card-header {
    background-color: #ffa85c; /* Warna oranye pastel yang lebih terang */
    color: white;
    font-weight: bold;
    text-align: center;
    font-size: 1.5rem;
    border-top-left-radius: 20px; /* Sudut melengkung atas kiri */
    border-top-right-radius: 20px; /* Sudut melengkung atas kanan */
}

/* Buttons */
.btn {
    border-radius: 50px; /* Membuat tombol melengkung penuh */
    transition: all 0.3s ease-in-out;
    font-size: 1rem;
    font-weight: bold;
}

.btn-secondary {
    background-color: #ffa85c;
    color: white;
    border: none;
}

.btn-secondary:hover {
    background-color: #ff8c42;
    transform: scale(1.05);
}

.btn-primary {
    background-color: #ff914d;
    color: white;
    border: none;
}

.btn-primary:hover {
    background-color: #ff7f3f;
    transform: scale(1.05);
}

.btn-danger {
    background-color: #ff6b3b;
    color: white;
    border: none;
}

.btn-danger:hover {
    background-color: #e05d35;
    transform: scale(1.05);
}

/* Table Styling */
.table {
    margin-top: 20px;
    width: 100%;
    border-collapse: separate;
    border-spacing: 0 10px; /* Memberikan jarak antar baris */
}

.table th {
    background-color: #ffa85c;
    color: white;
    padding: 15px;
    text-align: left;
    border: none;
    border-top-left-radius: 10px; /* Sudut melengkung atas kiri */
    border-top-right-radius: 10px; /* Sudut melengkung atas kanan */
}

.table td {
    padding: 15px;
    border: 1px solid #ffddc1;
    background-color: #fffaf4; /* Oranye pastel sangat lembut */
    border-radius: 10px; /* Membuat sel tabel melengkung */
}

/* Row Hover */
.table tr:hover {
    background-color: #fff0e6;
    transition: background-color 0.3s ease;
}

/* Add Smooth Scroll for Page */
html {
    scroll-behavior: smooth;
}

/* Responsive Design */
@media (max-width: 768px) {
    .card-header {
        font-size: 1.2rem;
    }

    .btn {
        font-size: 0.9rem;
    }

    .table th, .table td {
        padding: 10px;
    }
}

</style>
<br>
<br>
@endsection
