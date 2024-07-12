<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainIndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['pageTitle'] = 'Beranda';
        $data['productData'] = Product::latest()->get();

        // dd($data['productData']);

        return view('frontend.home.home', $data);
    }

    public function show($uuid)
    {
        $data['productDetail'] = Product::where('uuid', $uuid)->firstOrFail();
        $data['pageTitle'] = $data['productDetail']->nama_produk;

        return view('frontend.product.detail', $data);
    }

    public function create()
    {
        // Pastikan pengguna telah login
        if (!Auth::check()) {
            return redirect(route('login'))->with('error', 'Anda harus login terlebih dahulu');
        }

        $user = Auth::user();

        $data['pageTitle'] = 'Pesanan Anda';
        $data['productDetail'] = Transaction::with('details.product')
            ->where('user_id', $user->id)
            ->get();

        // Debugging untuk memastikan data yang diambil
        // dd($data['productDetail']);

        return view('frontend.product.create', $data);
    }

    public function store($uuid)
    {
        // Pastikan pengguna telah login
        if (!Auth::check()) {
            return redirect(route('auth.login'))->with('error', 'Anda harus login terlebih dahulu');
        }

        // Ambil detail produk
        $product = Product::where('uuid', $uuid)->firstOrFail();

        // Ambil user yang sedang login
        $user = Auth::user();

        // Periksa apakah sudah ada transaksi yang sedang berlangsung untuk user ini
        $transaction = Transaction::where('user_id', $user->id)
            ->first();

        if (!$transaction) {
            // Jika belum ada transaksi, buat transaksi baru
            $transaction = Transaction::create([
                'user_id' => $user->id,
                'keterangan' => 'test',
                'total_pemesanan' => 0, // akan ditambahkan di bawah
            ]);
        }

        // Periksa apakah produk sudah ada di detail transaksi
        $transactionDetail = TransactionDetail::where('transaksi_id', $transaction->id)
            ->where('produk_id', $product->id)
            ->first();

        if ($transactionDetail) {
            // Jika produk sudah ada, tambahkan jumlahnya
            $transactionDetail->total_pemesanan += 1;
            $transactionDetail->total_harga = $transactionDetail->total_pemesanan * $product->harga_jual;
            $transactionDetail->save();
        } else {
            // Jika produk belum ada, tambahkan sebagai item baru
            TransactionDetail::create([
                'transaksi_id' => $transaction->id,
                'produk_id' => $product->id,
                'total_pemesanan' => 1,
                'total_harga' => $product->harga_jual,
            ]);
        }

        // Update total pemesanan dalam transaksi
        $transaction->total_pemesanan += 1;
        $transaction->save();

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }
}
