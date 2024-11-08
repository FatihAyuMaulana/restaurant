<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Receipt</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        .receipt {
            background: white;
            padding: 20px;
            border: 1px solid #ddd;
            width: 400px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .receipt h2 {
            border-bottom: 1px dashed #000;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .receipt p {
            margin: 5px 0;
        }

        .receipt .details {
            text-align: left;
            margin: 20px 0;
            border-top: 1px dashed #000;
            border-bottom: 1px dashed #000;
            padding: 10px 0;
        }

        .receipt .total {
            font-size: 18px;
            font-weight: bold;
            margin-top: 10px;
        }

        .receipt .back-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #bcc7dd;
            color: rgb(253, 250, 250);
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="receipt">
        <h2>Struk Pembayaran</h2>

        <p><strong>Tanggal:</strong><br> {{ $transaction->tgl_transaksi }}</p>
        <p><strong>Status:</strong> {{ ucfirst($transaction->status) }}</p>

        <div class="details">
            <h4>Detail</h4>
            <pre>{{ $transaction->deskripsi }}</pre> <!-- Menampilkan deskripsi pesanan dengan format -->
        </div>

        <p class="total">Total: Rp. {{ number_format($transaction->total_harga, 0, ',', '.') }}</p>

        <!-- Button updated to redirect to the home page -->
        <a href="{{ route('home') }}" class="back-btn">Kembali ke Home</a>
    </div>
</body>

</html>
