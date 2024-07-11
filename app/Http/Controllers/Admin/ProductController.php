<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['pageTitle'] = 'Produk';

        return view('admin.products.index', $data);
    }

    public function tableProduct()
    {
        $query = Product::latest();

        return DataTables::of($query)
            ->addIndexColumn()
            ->editColumn('nama_produk', function ($data) {
                return $data->nama_produk;
            })
            ->editColumn('merek', function ($data) {
                return $data->merek;
            })
            ->editColumn('berat', function ($data) {
                return $data->berat;
            })
            ->editColumn('harga_jual', function ($data) {
                return $data->harga_jual;
            })
            ->editColumn('status', function ($data) {
                return $data->status;
            })
            ->editColumn('total_stock', function ($data) {
                return $data->total_stock;
            })
            ->addColumn('opsi', function ($data) {

                $detailRoute = route('admin.editProduct', ['product' => $data->uuid]);

                return '<a href="' . $detailRoute . '" class="py-2 text-md text-emas font-paragraph cursor-pointer hover:underline">Detail</a>';
            })
            ->rawColumns(['opsi'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['pageTitle'] = 'Tambah Produk';

        return view('admin.products.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_produk' => ['required', 'string', 'max:255'],
            'deskripsi_produk' => ['required', 'string', 'min:10'],
            'merek' => ['required', 'string', 'max:100'],
            'berat' => ['required', 'numeric', 'min:0'],
            'harga_jual' => ['required', 'numeric', 'min:0'],
            'total_stock' => ['required', 'integer', 'min:0'],
            'status' => ['required', 'in:tersedia,habis'],
            'gambar' => ['required', 'image', 'mimes:jpeg,png,jpg,webp', 'max:2048'],
            'meta_title' => ['nullable', 'string', 'max:60'],
            'meta_description' => ['nullable', 'string', 'max:160'],
            'meta_keywords' => ['nullable', 'string'],
            'og_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp', 'max:2048'],
        ]);

        if (isset($validatedData['gambar'])) {
            // Process 'ttd_kepala' if it exists
            if ($request->hasFile('gambar')) {
                // Handle file upload and storage
                $file = $request->file('gambar');
                $directoryPath = 'img';

                // Create directory if not exists
                if (!file_exists($directoryPath)) {
                    Storage::disk('public')->makeDirectory($directoryPath, 0775, true);
                }

                $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();
                Storage::disk('public')->put('/img/' . $filename, File::get($file));
                $validatedData['gambar'] = $filename;
            }
        }

        if (isset($validatedData['og_image'])) {
            // Process 'ttd_kepala' if it exists
            if ($request->hasFile('og_image')) {
                // Handle file upload and storage
                $file = $request->file('og_image');
                $directoryPath = 'img';

                // Create directory if not exists
                if (!file_exists($directoryPath)) {
                    Storage::disk('public')->makeDirectory($directoryPath, 0775, true);
                }

                $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();
                Storage::disk('public')->put('/img/' . $filename, File::get($file));
                $validatedData['og_image'] = $filename;
            }
        }

        Product::create($validatedData);

        return redirect(route('admin.product'))->with('success', 'Data produk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($uuid)
    {
        $data['pageTitle'] = 'Edit Produk';
        $data['productData'] = Product::where('uuid', $uuid)->firstOrFail();

        return view('admin.products.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'nama_produk' => ['required', 'string', 'max:255'],
            'deskripsi_produk' => ['required', 'string', 'min:10'],
            'merek' => ['required', 'string', 'max:100'],
            'berat' => ['required', 'numeric', 'min:0'],
            'harga_jual' => ['required', 'numeric', 'min:0'],
            'total_stock' => ['required', 'integer', 'min:0'],
            'status' => ['required', 'in:tersedia,habis'],
            'gambar' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp', 'max:2048'],
            'meta_title' => ['nullable', 'string', 'max:60'],
            'meta_description' => ['nullable', 'string', 'max:160'],
            'meta_keywords' => ['nullable', 'string'],
            'og_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp', 'max:2048'],
        ]);

        if (isset($validatedData['gambar'])) {
            // Process 'ttd_kepala' if it exists
            if ($request->hasFile('gambar')) {
                // Handle file upload and storage
                $file = $request->file('gambar');
                $directoryPath = 'img';

                // Create directory if not exists
                if (!file_exists($directoryPath)) {
                    Storage::disk('public')->makeDirectory($directoryPath, 0775, true);
                }

                $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();
                Storage::disk('public')->put('/img/' . $filename, File::get($file));
                $validatedData['gambar'] = $filename;
            }
        }

        if (isset($validatedData['og_image'])) {
            // Process 'ttd_kepala' if it exists
            if ($request->hasFile('og_image')) {
                // Handle file upload and storage
                $file = $request->file('og_image');
                $directoryPath = 'img';

                // Create directory if not exists
                if (!file_exists($directoryPath)) {
                    Storage::disk('public')->makeDirectory($directoryPath, 0775, true);
                }

                $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();
                Storage::disk('public')->put('/img/' . $filename, File::get($file));
                $validatedData['og_image'] = $filename;
            }
        }

        Product::where('uuid', $product->uuid)->update($validatedData);

        return redirect(route('admin.product'))->with('success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($uuid)
    {
        $product = Product::where('uuid', $uuid)->first();
        $product->delete();

        return redirect(route('admin.product'))->with('success', 'Data produk berhasil dihapus!');
    }
}
