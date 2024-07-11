@extends('admin.layout.app')

@section('content')
    @include('admin.layout.shell')
    <div class="p-4 sm:ml-64 bg-putih min-h-screen pt-[4.2rem]">
        <div class="p-1 md:p-4 space-y-8">
            <div class="flex flex-col lg:flex-row justify-between items-start lg:items-end">
                <h1 class="text-hijau text-5xl font-bold tracking-wide">
                    {{ $pageTitle }}
                </h1>
                <div>
                    <a href="{{ route('admin.createProduct') }}"
                        class="w-full text-lg font-normal text-end text-emas hover:text-hijau hover:underline rounded-none sm:w-auto">Tambah
                        Produk
                    </a>
                </div>
            </div>
            <input type="hidden" id="searchTableProduct" value="{{ route('admin.tableProduct') }}">
            <table id="tableProductList"
                class="border-collapse overflow-x-auto w-full text-md text-left border border-abu rtl:text-right text-hijau z-10">
                <thead class="text-md capitalize bg-abu">
                    <tr>
                        <th>
                            No.
                        </th>
                        <th>
                            Produk
                        </th>
                        <th>
                            Merek
                        </th>
                        <th>
                            Berat (gram)
                        </th>
                        <th>
                            Harga Jual (Rp)
                        </th>
                        <th>
                            Status
                        </th>
                        <th>
                            Stock
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
@endsection
