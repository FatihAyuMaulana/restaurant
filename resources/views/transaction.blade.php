@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Monthly Transactions</h2>


    <!-- Form Filter Bulan dan Tahun -->
    <form action="{{ url("/transaction") }}" method="GET" class="mb-3">
        <div class="row">
            {{-- <div class="">
                <select name="month" id="month" class="form-control">
                    <option value="1" {{ request('month')==1 ? 'selected' : '' }}>January</option>
                    <option value="2" {{ request('month')==2 ? 'selected' : '' }}>February</option>
                    <option value="3" {{ request('month')==3 ? 'selected' : '' }}>March</option>
                    <option value="4" {{ request('month')==4 ? 'selected' : '' }}>April</option>
                    <option value="5" {{ request('month')==5 ? 'selected' : '' }}>May</option>
                    <option value="6" {{ request('month')==6 ? 'selected' : '' }}>June</option>
                    <option value="7" {{ request('month')==7 ? 'selected' : '' }}>July</option>
                    <option value="8" {{ request('month')==8 ? 'selected' : '' }}>August</option>
                    <option value="9" {{ request('month')==9 ? 'selected' : '' }}>September</option>
                    <option value="10" {{ request('month')==10 ? 'selected' : '' }}>October</option>
                    <option value="11" {{ request('month')==11 ? 'selected' : '' }}>November</option>
                    <option value="12" {{ request('month')==12 ? 'selected' : '' }}>December</option>
                </select> --}}

        <!-- Form Filter Bulan dan Tahun -->
        <form action="{{ route('transactions.report') }}" method="GET" class="mb-3">
            <div class="row">
                <div class="">
                    <select name="month" id="month" class="form-control">
                        <option value="1" {{ request('month') == 1 ? 'selected' : '' }}>January</option>
                        <option value="2" {{ request('month') == 2 ? 'selected' : '' }}>February</option>
                        <option value="3" {{ request('month') == 3 ? 'selected' : '' }}>March</option>
                        <option value="4" {{ request('month') == 4 ? 'selected' : '' }}>April</option>
                        <option value="5" {{ request('month') == 5 ? 'selected' : '' }}>May</option>
                        <option value="6" {{ request('month') == 6 ? 'selected' : '' }}>June</option>
                        <option value="7" {{ request('month') == 7 ? 'selected' : '' }}>July</option>
                        <option value="8" {{ request('month') == 8 ? 'selected' : '' }}>August</option>
                        <option value="9" {{ request('month') == 9 ? 'selected' : '' }}>September</option>
                        <option value="10" {{ request('month') == 10 ? 'selected' : '' }}>October</option>
                        <option value="11" {{ request('month') == 11 ? 'selected' : '' }}>November</option>
                        <option value="12" {{ request('month') == 12 ? 'selected' : '' }}>December</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select name="year" id="year" class="form-control">
                        <option value="2026" {{ request('year') == 2026 ? 'selected' : '' }}>2026</option>
                        <option value="2025" {{ request('year') == 2025 ? 'selected' : '' }}>2025</option>
                        <option value="2024" {{ request('year') == 2024 ? 'selected' : '' }}>2024</option>
                        <option value="2023" {{ request('year') == 2023 ? 'selected' : '' }}>2023</option>
                        <option value="2022" {{ request('year') == 2022 ? 'selected' : '' }}>2022</option>
                        <option value="2021" {{ request('year') == 2021 ? 'selected' : '' }}>2021</option>
                        <option value="2020" {{ request('year') == 2020 ? 'selected' : '' }}>2020</option>
                    </select>
                </div>
                <div class="col-md-4" style="margin-top: 32px;">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>

            </div>
        </form>

        @if ($transactions->isEmpty())
            <p>No transactions found for this month.</p>
        @else
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User ID</th>
                        <th>Tanggal Transaksi</th>
                        <th>Status</th>
                        <th>Description</th>
                        <th>Total Transaction</th>
                        <th>Struk Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                        <tr>
                            <td>{{ $transaction->id }}</td>
                            <td>{{ $transaction->user->name }}</td>
                            <td>{{ $transaction->tgl_transaksi }}</td>
                            <td>{{ ucfirst($transaction->status) }}</td>
                            <td>{{ $transaction->deskripsi }}</td>
                            <td>Rp. {{ number_format($transaction->total_harga, 0, ',', '.') }}</td>
                            <td>
                                {{-- <a href="{{ route('cart.receipt', $transaction->id) }}" class="btn btn-secondary"
                                    style="padding: 8px 16px; font-size: 1rem;" target="_blank">Lihat Struk</a> --}}
                                    <button onclick="printReceipt('{{ route('cart.receipt', $transaction->id) }}')"
                                        class="btn-secondary btn-sm" style="padding: 8px 16px; font-size: 1rem;">
                                    <!-- Ikon Printer -->
                                    <i class="fas fa-print"></i> Cetak
                                </button>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <a href="{{ url('/admin/dashboard') }}" class="btn btn-primary mt-3 mb-3">
            <!-- Ikon Kembali -->
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
        
</div>
    <script>
        function printReceipt(url) {
            const printWindow = window.open(url, '_blank');
            printWindow.addEventListener('load', function() {
                printWindow.print();
            });
        }
    </script>
    
    <style>
        /* Body Styling */
body {
    background-color: #fef8f4; /* Oranye pastel untuk latar belakang */
}

/* Container Styling */
.container {
    padding: 20px;
    background-color: #fffaf4; /* Oranye pastel lembut */
    border-radius: 15px; /* Membuat container melengkung */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Efek bayangan */
}

/* Header */
h2 {
    color: #ffa85c;
    font-weight: bold;
    text-align: center;
    margin-bottom: 20px;
}

/* Form Filter Styling */
form .form-control {
    border-radius: 10px; /* Melengkung untuk dropdown */
    border: 1px solid #ffddc1;
    background-color: #fffaf4;
}

form .btn-primary {
    background-color: #ffa85c;
    border: none;
    border-radius: 20px;
    transition: all 0.3s ease-in-out;
    font-weight: bold;
}

form .btn-primary:hover {
    background-color: #ff8c42;
    transform: scale(1.05);
}

/* Table Styling */
.table {
    margin-top: 20px;
    width: 100%;
    border-collapse: separate;
    border-spacing: 0 10px; /* Jarak antar baris */
}

.table th {
    background-color: #ffa85c;
    color: white;
    padding: 15px;
    text-align: center;
    border: none;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.table td {
    padding: 15px;
    border: 1px solid #ffddc1;
    background-color: #fffaf4; /* Warna lembut */
    text-align: center;
    border-radius: 10px; /* Membuat sel tabel melengkung */
}

/* Hover Effect for Rows */
.table tr:hover {
    background-color: #fff0e6;
    transition: background-color 0.3s ease;
}

/* Button Styling */
.btn-secondary {
    background-color: #ffa85c;
    color: white;
    border: none;
    border-radius: 10px;
    transition: all 0.3s ease-in-out;
    font-size: 0.9rem;
}

.btn-secondary:hover {
    background-color: #ff8c42;
    transform: scale(1.05);
}

/* Button Kembali */
.btn-primary.mt-3 {
    background-color: #ffa85c;
    border: none;
    border-radius: 20px;
    font-weight: bold;
    transition: all 0.3s ease-in-out;
}

.btn-primary.mt-3:hover {
    background-color: #ff8c42;
    transform: scale(1.05);
}

/* Responsive Design */
@media (max-width: 768px) {
    .form-control {
        margin-bottom: 10px;
    }

    .btn {
        font-size: 0.8rem;
    }

    .table th, .table td {
        font-size: 0.9rem;
        padding: 10px;
    }
}

    </style>

@endsection
