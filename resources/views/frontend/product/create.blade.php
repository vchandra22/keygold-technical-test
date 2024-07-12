@extends('frontend.layout.app')

@section('content')
    <section class="mt-[4.1rem] bg-putih py-8 md:py-16">
        <div class="mx-auto max-w-screen-2xl px-4 2xl:px-0 min-h-screen">
            <h2 class="md:text-4xl font-bold tracking-wide text-hijau text-2xl mb-12">Shopping Cart</h2>

            @foreach ($productDetail as $data)
                @if ($data->details !== null)
                    <div class="grid grid-cols-5 gap-4">
                        <div class="col-span-4 ">
                            @foreach ($data->details as $detail)
                                <div
                                    class="mb-4 w-full bg-putih max-h-64 border border-abu rounded-sm shadow-sm flex justify-center">
                                    <div class="w-full p-6 grid grid-cols-5 gap-8">
                                        <div class="flex justify-center items-center">
                                            <a href="#" class="shrink-0 md:order-1">
                                                <img class="h-40 w-40"
                                                    src="{{ $detail->product->gambar ? asset('storage/img/' . $detail->product->gambar) : asset('assets/img/logo-keygold.png') }}"
                                                    alt="{{ $detail->product->nama_produk }}" />
                                            </a>
                                        </div>
                                        <div class="col-span-3 w-full">
                                            <a href="#"
                                                class="text-3xl font-bold text-hijau hover:underline tracking-wide">{{ $detail->product->nama_produk }}
                                            </a>
                                            <ul
                                                class="mt-8 max-w-md space-y-2 text-hijau list-disc list-inside font-paragraph">
                                                <li>
                                                    Nama Produk: {{ $detail->product->nama_produk }}
                                                </li>
                                                <li>
                                                    Merek: {{ $detail->product->merek }}
                                                </li>
                                                <li>
                                                    Berat Produk: {{ $detail->product->berat }}
                                                </li>
                                            </ul>
                                            <button type="button"
                                                class="inline-flex mt-4 items-end justify-end text-md font-medium text-red-600 hover:underline">
                                                <svg class="me-1.5 h-5 w-5" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M6 18 17.94 6M18 18 6.06 6" />
                                                </svg>
                                                Hapus dari keranjang
                                            </button>
                                        </div>
                                        <div class="w-full space-y-3 text-hijau">
                                            <p class="text-md text-end mb-8">
                                                Total dipesan: {{ $detail->total_pemesanan }}
                                            </p>
                                            <span class="text-end text-emas w-full mx-auto">Total</span>
                                            <div>
                                                <h6 class="w-full font-bold text-4xl text-center tracking-wide">
                                                    Rp. {{ number_format($detail->total_harga, 0, ',', '.') }}
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="mx-auto mt-6 max-w-4xl space-y-6 lg:mt-0 lg:w-full h-full">
                            <div
                                class="space-y-4 rounded-sm border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6">
                                <p class="text-xl font-semibold text-hijau dark:text-putih">Total pemesanan</p>

                                <div class="space-y-4">
                                    <dl
                                        class="flex items-center justify-center gap-4 border-t border-gray-200 pt-2 dark:border-gray-700">
                                        <dd class="text-4xl font-bold text-hijau dark:text-putih">
                                            Rp. {{ number_format($detail->total_harga, 0, ',', '.') }}
                                        </dd>
                                    </dl>
                                </div>

                                <a href="#"
                                    class="flex w-full items-center justify-center rounded-sm bg-hijau px-5 py-2.5 text-md font-medium text-putih hover:bg-hijau focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-hijau dark:focus:ring-primary-800">Bayar
                                    Sekarang</a>

                                <div class="flex items-center justify-center gap-2">
                                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400"> or </span>
                                    <a href="#" title=""
                                        class="inline-flex items-center gap-2 text-sm font-medium text-primary-700 underline hover:no-underline dark:text-primary-500">
                                        Lanjutkan Belanja
                                        <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="mb-4 w-full bg-putih border border-abu rounded-sm shadow-sm flex justify-center">
                        <div class="w-full text-2xl text-center text-hijau min-h-screen">
                            <h3>Tidak ada produk dalam keranjangmu, </h3>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </section>
@endsection
