@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Monthly Transactions</h2>

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
                                    class="btn-secondary btn-sm" style="padding: 8px 16px; font-size: 1rem;">Cetak</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <a href="{{ route('menu.index') }}" class="btn btn-primary mt-3 mb-3">Back to Menu</a>
    </div>

    <script>
        function printReceipt(url) {
            const printWindow = window.open(url, '_blank');
            printWindow.addEventListener('load', function() {
                printWindow.print();
            });
        }
    </script>
@endsection
