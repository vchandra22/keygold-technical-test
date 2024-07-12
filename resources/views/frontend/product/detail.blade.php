@extends('frontend.layout.app')

@section('content')
    {{-- jumbotron section start --}}
    <section class="mt-[4.1rem] relative w-full h-96">
        {{-- toast start --}}
        @if (session('success'))
            <div id="toast-success"
                class="fixed z-50 flex items-center w-full max-w-xs p-4 mb-4 text-hijau border border-gray-100 bg-putih shadow-sm top-5 right-5 mt-[4.4rem]"
                role="alert">
                <div
                    class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-transparent dark:text-green-500">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                    <span class="sr-only">Check icon</span>
                </div>
                <div class="ms-3 text-sm font-medium">{{ session('success') }}</div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-putih text-hijau rounded-sm focus:ring-2 focus:ring-gray-300 p-1.5 inline-flex items-center justify-center h-8 w-8"
                    data-dismiss-target="#toast-success" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        @endif
        {{-- toast end --}}

        <img src="{{ asset('assets/img/bg-jumbotron-keygold.png') }}" class="object-cover w-full h-full" width="100"
            height="100" alt="{{ $productDetail->nama_produk }}">
        <div class="absolute top-0 right-0 w-full h-full bg-hijau bg-opacity-80">
            <div class="max-w-screen-2xl px-4 mx-auto text-start grid grid-cols-1 content-between h-full">
                {{-- breadcrums start --}}
                <nav class="flex py-8" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-4">
                        <li class="inline-flex items-center">
                            <a href="{{ url('/') }}"
                                class="inline-flex items-center text-lg font-medium text-emas hover:text-emas">
                                Beranda
                            </a>
                        </li>
                        <li>
                            <div class="flex items-start">
                                <i class="fa-solid fa-chevron-right w-5 h-3 text-emas pt-1"></i>
                                <a href="#" class="ms-1 text-lg font-medium text-emas hover:text-putih md:ms-2">
                                    Produk
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-start">
                                <i class="fa-solid fa-chevron-right w-5 h-3 text-emas pt-1"></i>
                                <a href="{{ url()->current() }}"
                                    class="ms-1 text-lg font-bold w-full text-putih overflow-hidden line-clamp-1 hover:text-putih md:ms-2">
                                    @php
                                        $content = $productDetail->nama_produk;
                                        $strippedContent = strip_tags($content);
                                        $limitedContent = \Illuminate\Support\Str::limit($strippedContent, 80);
                                    @endphp
                                    {{ $limitedContent }}
                                </a>
                            </div>
                        </li>
                    </ol>
                </nav>
                {{-- breadcrums end --}}

                <div class="pb-20">
                    <h1 class="font-bold text-5xl text-start text-putih overflow-x-hidden h-20 line-clamp-2">
                        {{ $productDetail->nama_produk }} ({{ $productDetail->merek }})
                    </h1>
                </div>
            </div>
        </div>
    </section>
    {{-- jumbotron section end --}}

    {{-- detail konten start --}}
    <section class="py-8 bg-putih md:py-16">
        <div class="max-w-screen-2xl px-4 mx-auto 2xl:px-0">
            <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
                <div class="shrink-0 max-w-md lg:max-w-lg mx-auto">
                    <img class="w-full dark:hidden"
                        src="{{ $productDetail->gambar ? asset('storage/img/' . $productDetail->gambar) : asset('assets/img/logo-keygold.png') }}"
                        alt="{{ $productDetail->nama_produk }}" />
                    <img class="w-full hidden dark:block"
                        src="{{ $productDetail->gambar ? asset('storage/img/' . $productDetail->gambar) : asset('assets/img/logo-keygold.png') }}"
                        alt="{{ $productDetail->nama_produk }}" />
                </div>

                <div class="mt-6 sm:mt-8 lg:mt-0">
                    <h1 class="text-xl font-semibold text-hijau sm:text-2xl">
                        {{ $productDetail->nama_produk }} ({{ $productDetail->merek }})
                    </h1>
                    <div class="mt-4 sm:items-center sm:gap-4 sm:flex">
                        <p class="md:text-4xl font-extrabold text-emas text-3xl">
                            Rp. {{ number_format($productDetail->harga_jual, 0, ',', '.') }}
                        </p>
                    </div>

                    <div class="mt-6 sm:gap-4 sm:items-center sm:flex sm:mt-8">
                        <form action="{{ route('cart.storeProduct', $productDetail->uuid) }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="text-putih mt-4 sm:mt-0 bg-hijau hover:bg-emas focus:ring-4 focus:ring-emas font-medium rounded-sm text-md px-5 py-2.5 flex items-center justify-center">
                                <svg class="w-5 h-5 -ms-2 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                                </svg>
                                Tambah ke Keranjang</button>
                        </form>
                    </div>

                    <hr class="my-6 md:my-8 border-gray-200 dark:border-gray-800" />


                    <h2 class="mb-2 text-lg font-semibold text-emas">Detail Produk:</h2>
                    <ul class="max-w-md space-y-1 text-hijau list-disc list-inside font-paragraph">
                        <li>
                            Nama Produk: {{ $productDetail->nama_produk }}
                        </li>
                        <li>
                            Merek: {{ $productDetail->merek }}
                        </li>
                        <li>
                            Berat Produk: {{ $productDetail->berat }}
                        </li>
                        <li>
                            Sisa Stock: {{ $productDetail->total_stock }}
                        </li>
                        <li>
                            Deskripsi Produk:
                            <p class="mb-6 prose">
                                {!! $productDetail->deskripsi_produk !!}
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- detail konten end --}}
@endsection
