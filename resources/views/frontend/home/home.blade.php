@extends('frontend.layout.app')

@section('content')
    {{-- jumbotron section start --}}
    <section class="mt-[4.1rem] bg-putih dark:bg-gray-900">
        {{-- toast start --}}
        @if (session()->has('loginError'))
            <div id="toast-danger"
                class="fixed flex items-center w-full max-w-xs p-4 mb-4 text-hijau border border-gray-100 bg-putih shadow-sm top-5 right-5 mt-[4.4rem]"
                role="alert">
                <div
                    class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-transparent dark:text-red-500">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                    </svg>
                    <span class="sr-only">Error icon</span>
                </div>
                <div class="ms-3 text-sm font-normal">{{ session('loginError') }}</div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-putih text-hijau rounded-sm focus:ring-2 focus:ring-gray-300 p-1.5 inline-flex items-center justify-center h-8 w-8"
                    data-dismiss-target="#toast-danger" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        @endif

        @if (session('success'))
            <div id="toast-success"
                class="fixed flex items-center w-full max-w-xs p-4 mb-4 text-hijau border border-gray-100 bg-putih shadow-sm top-5 right-5 mt-[4.4rem]"
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
                <div class="ms-3 text-sm font-normal">{{ session('success') }}</div>
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

        <div class="pt-8 px-4 mx-auto max-w-screen-2xl text-start lg:pt-16 overflow-hidden">
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-12">
                <div class="my-auto">
                    <h1
                        class="mb-6 text-5xl xl:text-7xl font-extrabold tracking-tight leading-none text-hijau md:text-5xl lg:text-6xl dark:text-white">
                        Investasi Emas Terpercaya Bersama Key Gold Investama
                    </h1>
                    <p class="text-lg font-paragraph text-justify text-emas lg:text-xl dark:text-gray-200">
                        Kami menawarkan produk emas berkualitas dengan harga bersaing, layanan profesional, serta
                        kepercayaan yang
                        telah terbukti selama bertahun-tahun. Bergabunglah bersama kami dan mulailah perjalanan investasi
                        emas Anda
                        dengan langkah yang pasti dan menguntungkan.
                    </p>
                </div>
                <div>
                    <div class="relative">
                        <img src="{{ asset('assets/img/bg-jumbotron-keygold.png') }}" width="100" height="100"
                            class="w-full overflow-hidden" alt="Gambar Emas Keygold">
                        <div class="absolute inset-0 bg-hijau opacity-70"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- jumbotron section end --}}

    {{-- section layanan start --}}
    <section class="bg-putih">
        <div class="max-w-screen-2xl px-4 mx-auto p-16">
            <div class="py-12 border border-abu shadow-sm">
                <div class="grid grid-cols-4 gap-4 justify-center items-center">
                    <div class="text-center border-r-2 border-abu">
                        <div>
                            <img src="{{ asset('assets/icons/certificate.png') }}" class="overflow-hidden h-16 mx-auto mb-4"
                                alt="Icon Certificate">
                        </div>
                        <div>
                            <h3 class="mb-2 text-hijau text-2xl font-bold tracking-wide">
                                Certified
                            </h3>
                            <p class="font-paragraph text-md text-hijau">Available certificates of authenticity</p>
                        </div>
                    </div>
                    <div class="text-center border-r-2 border-abu">
                        <div>
                            <img src="{{ asset('assets/icons/perisai.png') }}" class="overflow-hidden h-16 mx-auto mb-4"
                                alt="Icon Certificate">
                        </div>
                        <div>
                            <h3 class="mb-2 text-hijau text-2xl font-bold tracking-wide">
                                Secure
                            </h3>
                            <p class="font-paragraph text-md text-hijau">Certified marketplace since 2024</p>
                        </div>
                    </div>
                    <div class="text-center border-r-2 border-abu">
                        <div>
                            <img src="{{ asset('assets/icons/shipping.png') }}" class="overflow-hidden h-16 mx-auto mb-4"
                                alt="Icon Certificate">
                        </div>
                        <div>
                            <h3 class="mb-2 text-hijau text-2xl font-bold tracking-wide">
                                Shipping
                            </h3>
                            <p class="font-paragraph text-md text-hijau">Free, fast, and reliable shipping</p>
                        </div>
                    </div>
                    <div class="text-center">
                        <div>
                            <img src="{{ asset('assets/icons/transparent.png') }}" class="overflow-hidden h-16 mx-auto mb-4"
                                alt="Icon Certificate">
                        </div>
                        <div>
                            <h3 class="mb-2 text-hijau text-2xl font-bold tracking-wide">
                                Transparent
                            </h3>
                            <p class="font-paragraph text-md text-hijau">Hassle-free return policy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- section layanan end --}}

    {{-- list product start --}}
    <section class="bg-gray-50">
        <div class="max-w-screen-2xl px-4 mx-auto pb-12">
            <div class="py-16 flex justify-between items-end">
                <h2 class="text-start text-5xl xl:text-7xl font-medium tracking-tight text-hijau pt-8">Beli Logam Mulia</h2>
                <a href="#"
                    class="text-start text-lg font-regular tracking-tight text-emas hover:text-hijau hover:underline">Produk
                    lain ...</a>
            </div>
            <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($productData as $data)
                    <div class="border border-abu bg-putih p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                        <div class="h-56 w-auto overflow-hidden">
                            <a href="#">
                                <img class="mx-auto h-full dark:hidden"
                                    src="{{ $data->gambar ? asset('storage/img/' . $data->gambar) : asset('assets/img/logo-keygold.png') }}"
                                    alt="{{ $data->nama_produk }}" />
                            </a>
                        </div>
                        <div>
                            <div class="mb-4 flex items-center justify-between gap-4">
                                <span
                                    class="me-2 bg-hijau px-4 py-2 rounded-sm text-xs font-medium text-white font-paragraph dark:bg-primary-900 dark:text-primary-300 capitalize">
                                    {{ $data->status }}
                                </span>

                                <button type="button" data-tooltip-target="tooltip-add-to-favorites"
                                    class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="sr-only"> Add to Favorites </span>
                                    <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z" />
                                    </svg>
                                </button>
                                <div id="tooltip-add-to-favorites" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Add to favorites
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>
                            </div>

                            <a href="#"
                                class="text-lg font-semibold leading-tight text-hijau hover:underline font-paragraph dark:text-white">
                                {{ $data->nama_produk }}
                            </a>

                            <ul class="mt-2 flex items-center gap-4">
                                <li class="flex items-center gap-2">
                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400 font-paragraph">Merek:
                                        {{ $data->merek }}
                                    </p>
                                </li>

                                <li class="flex items-center gap-2">
                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400 font-paragraph">Berat:
                                        {{ $data->berat }}
                                    </p>
                                </li>
                            </ul>

                            <div class="mt-4 flex items-center justify-between gap-4">
                                <p class="text-2xl font-paragraph font-extrabold leading-tight text-hijau dark:text-white">
                                    Rp. {{ number_format($data->harga_jual, 0, ',', '.') }}
                                </p>
                                <a href="{{ route('frontend.detailProduct', ['uuid' => $data->uuid]) }}"
                                    class="inline-flex items-center rounded-sm bg-emas font-paragraph px-5 py-2.5 text-sm font-medium text-putih hover:bg-hijau focus:outline-none focus:ring-4 gap-2 focus:ring-hijau">
                                    Detail
                                    <i class="fa-solid fa-location-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- list product end --}}

    {{-- section penawaran / promo start --}}
    <section class="bg-putih">
        <div class="max-w-screen-2xl px-4 mx-auto pb-12">
            <div class="py-16">
                <div class="py-12 bg-abu">
                    <div class="mx-auto px-6">
                        <div class="text-center mb-12">
                            <h2 class="text-5xl font-bold text-hijau">Investasi Emas Terbaik di Key Gold Investama
                            </h2>
                            <p class="mt-4 text-lg font-paragraph text-emas lg:text-xl dark:text-gray-200 text-center">
                                Mulailah perjalanan investasi Anda dengan keamanan dan keuntungan
                                bersama Key Gold Investama</p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="bg-putih rounded-sm p-6 shadow-sm">
                                <h3 class="text-3xl font-semibold text-hijau">Mengapa Investasi Emas?</h3>
                                <p class="mt-4 text-md text-emas font-paragraph text-justify min-h-20">Emas adalah salah
                                    satu investasi
                                    paling stabil dan
                                    menguntungkan sepanjang masa. Dengan nilai yang terus meningkat, emas memberikan
                                    perlindungan finansial dan diversifikasi portofolio yang solid.</p>
                                <a href="#"
                                    class="mt-6 inline-block bg-emas text-white py-3 px-4 hover:bg-hijau">Pelajari
                                    Lebih Lanjut</a>
                            </div>
                            <div class="bg-putih rounded-sm p-6 shadow-sm">
                                <h3 class="text-3xl font-semibold text-hijau">Beli Emas di PT Key Gold Investama</h3>
                                <p class="mt-4 text-md text-emas font-paragraph text-justify min-h-20">PT Key Gold
                                    Investama
                                    menyediakan emas berkualitas tinggi
                                    dengan harga kompetitif. Kami menjamin keamanan transaksi dan keaslian produk yang Anda
                                    beli.</p>
                                <a href="#"
                                    class="mt-6 inline-block bg-emas text-white py-3 px-4 hover:bg-hijau">Mulai
                                    Berbelanja</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- section penawaran / promo end --}}
@endsection
