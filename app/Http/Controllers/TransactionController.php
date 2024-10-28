<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index(Request $request)
    {

    $month = $request->input('month', date('m')); // Default ke bulan saat ini
    $year = $request->input('year', date('Y')); // Default ke tahun saat ini

    // Ambil transaksi berdasarkan bulan dan tahun
    $transactions = Transaction::whereMonth('tgl_transaksi', $month)
                               ->whereYear('tgl_transaksi', $year)
                               ->get();

        return view('transaction', compact('transactions'));
    }
}
