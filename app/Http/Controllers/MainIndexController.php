<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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
}
