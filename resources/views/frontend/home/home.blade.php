@extends('frontend.layout.app')

@section('content')
    {{-- jumbotron section start --}}
    <section class="mt-[4.4rem] bg-putih dark:bg-gray-900">
        <div class="pt-8 px-4 mx-auto max-w-screen-2xl text-start lg:pt-16 overflow-hidden">
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-12">
                <div class="my-auto">
                    <h1
                        class="mb-6 text-5xl xl:text-7xl font-extrabold tracking-tight leading-none text-hijau md:text-5xl lg:text-6xl dark:text-white">
                        Investasi Emas Terpercaya Bersama Key Gold
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
                <div class="border border-abu bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <div class="h-56 w-auto overflow-hidden">
                        <a href="#">
                            <img class="mx-auto h-full dark:hidden" src="{{ asset('assets/img/sample-product.png') }}"
                                alt="sample product foto" />
                            <img class="mx-auto hidden h-full dark:block" src="{{ asset('assets/img/sample-product.png') }}"
                                alt="sample product foto" />
                        </a>
                    </div>
                    <div>
                        <div class="mb-4 flex items-center justify-between gap-4">
                            <span
                                class="me-2 bg-hijau px-4 py-2 rounded-sm text-xs font-medium text-white font-paragraph dark:bg-primary-900 dark:text-primary-300">
                                Tersedia
                            </span>

                            <button type="button" data-tooltip-target="tooltip-add-to-favorites"
                                class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <span class="sr-only"> Add to Favorites </span>
                                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24">
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
                            Emas Batangan - 0.5 gr
                        </a>

                        <ul class="mt-2 flex items-center gap-4">
                            <li class="flex items-center gap-2">
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400 font-paragraph">Merek: Antam
                                </p>
                            </li>

                            <li class="flex items-center gap-2">
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400 font-paragraph">Berat: 0.5
                                    gram</p>
                            </li>
                        </ul>

                        <div class="mt-4 flex items-center justify-between gap-4">
                            <p class="text-2xl font-paragraph font-extrabold leading-tight text-hijau dark:text-white">Rp
                                740,000</p>
                            <button type="button"
                                class="inline-flex items-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4  focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                                </svg>
                                Add to cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="border border-abu bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <div class="h-56 w-auto overflow-hidden">
                        <a href="#">
                            <img class="mx-auto h-full dark:hidden" src="{{ asset('assets/img/sample-product.png') }}"
                                alt="sample product foto" />
                            <img class="mx-auto hidden h-full dark:block" src="{{ asset('assets/img/sample-product.png') }}"
                                alt="sample product foto" />
                        </a>
                    </div>
                    <div>
                        <div class="mb-4 flex items-center justify-between gap-4">
                            <span
                                class="me-2 bg-hijau px-4 py-2 rounded-sm text-xs font-medium text-white font-paragraph dark:bg-primary-900 dark:text-primary-300">
                                Tersedia
                            </span>

                            <button type="button" data-tooltip-target="tooltip-add-to-favorites"
                                class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <span class="sr-only"> Add to Favorites </span>
                                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24">
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
                            Emas Batangan - 0.5 gr
                        </a>

                        <ul class="mt-2 flex items-center gap-4">
                            <li class="flex items-center gap-2">
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400 font-paragraph">Merek: Antam
                                </p>
                            </li>

                            <li class="flex items-center gap-2">
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400 font-paragraph">Berat: 0.5
                                    gram</p>
                            </li>
                        </ul>

                        <div class="mt-4 flex items-center justify-between gap-4">
                            <p class="text-2xl font-paragraph font-extrabold leading-tight text-hijau dark:text-white">Rp
                                740,000</p>
                            <button type="button"
                                class="inline-flex items-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4  focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                                </svg>
                                Add to cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="border border-abu bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <div class="h-56 w-auto overflow-hidden">
                        <a href="#">
                            <img class="mx-auto h-full dark:hidden" src="{{ asset('assets/img/sample-product.png') }}"
                                alt="sample product foto" />
                            <img class="mx-auto hidden h-full dark:block"
                                src="{{ asset('assets/img/sample-product.png') }}" alt="sample product foto" />
                        </a>
                    </div>
                    <div>
                        <div class="mb-4 flex items-center justify-between gap-4">
                            <span
                                class="me-2 bg-hijau px-4 py-2 rounded-sm text-xs font-medium text-white font-paragraph dark:bg-primary-900 dark:text-primary-300">
                                Tersedia
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
                            Emas Batangan - 0.5 gr
                        </a>

                        <ul class="mt-2 flex items-center gap-4">
                            <li class="flex items-center gap-2">
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400 font-paragraph">Merek: Antam
                                </p>
                            </li>

                            <li class="flex items-center gap-2">
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400 font-paragraph">Berat: 0.5
                                    gram</p>
                            </li>
                        </ul>

                        <div class="mt-4 flex items-center justify-between gap-4">
                            <p class="text-2xl font-paragraph font-extrabold leading-tight text-hijau dark:text-white">Rp
                                740,000</p>
                            <button type="button"
                                class="inline-flex items-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4  focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                                </svg>
                                Add to cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="border border-abu bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <div class="h-56 w-auto overflow-hidden">
                        <a href="#">
                            <img class="mx-auto h-full dark:hidden" src="{{ asset('assets/img/sample-product.png') }}"
                                alt="sample product foto" />
                            <img class="mx-auto hidden h-full dark:block"
                                src="{{ asset('assets/img/sample-product.png') }}" alt="sample product foto" />
                        </a>
                    </div>
                    <div>
                        <div class="mb-4 flex items-center justify-between gap-4">
                            <span
                                class="me-2 bg-hijau px-4 py-2 rounded-sm text-xs font-medium text-white font-paragraph dark:bg-primary-900 dark:text-primary-300">
                                Tersedia
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
                            Emas Batangan - 0.5 gr
                        </a>

                        <ul class="mt-2 flex items-center gap-4">
                            <li class="flex items-center gap-2">
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400 font-paragraph">Merek: Antam
                                </p>
                            </li>

                            <li class="flex items-center gap-2">
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400 font-paragraph">Berat: 0.5
                                    gram</p>
                            </li>
                        </ul>

                        <div class="mt-4 flex items-center justify-between gap-4">
                            <p class="text-2xl font-paragraph font-extrabold leading-tight text-hijau dark:text-white">Rp
                                740,000</p>
                            <button type="button"
                                class="inline-flex items-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4  focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                                </svg>
                                Add to cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="border border-abu bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <div class="h-56 w-auto overflow-hidden">
                        <a href="#">
                            <img class="mx-auto h-full dark:hidden" src="{{ asset('assets/img/sample-product.png') }}"
                                alt="sample product foto" />
                            <img class="mx-auto hidden h-full dark:block"
                                src="{{ asset('assets/img/sample-product.png') }}" alt="sample product foto" />
                        </a>
                    </div>
                    <div>
                        <div class="mb-4 flex items-center justify-between gap-4">
                            <span
                                class="me-2 bg-hijau px-4 py-2 rounded-sm text-xs font-medium text-white font-paragraph dark:bg-primary-900 dark:text-primary-300">
                                Tersedia
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
                            Emas Batangan - 0.5 gr
                        </a>

                        <ul class="mt-2 flex items-center gap-4">
                            <li class="flex items-center gap-2">
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400 font-paragraph">Merek: Antam
                                </p>
                            </li>

                            <li class="flex items-center gap-2">
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400 font-paragraph">Berat: 0.5
                                    gram</p>
                            </li>
                        </ul>

                        <div class="mt-4 flex items-center justify-between gap-4">
                            <p class="text-2xl font-paragraph font-extrabold leading-tight text-hijau dark:text-white">Rp
                                740,000</p>
                            <button type="button"
                                class="inline-flex items-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4  focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                                </svg>
                                Add to cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="border border-abu bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <div class="h-56 w-auto overflow-hidden">
                        <a href="#">
                            <img class="mx-auto h-full dark:hidden" src="{{ asset('assets/img/sample-product.png') }}"
                                alt="sample product foto" />
                            <img class="mx-auto hidden h-full dark:block"
                                src="{{ asset('assets/img/sample-product.png') }}" alt="sample product foto" />
                        </a>
                    </div>
                    <div>
                        <div class="mb-4 flex items-center justify-between gap-4">
                            <span
                                class="me-2 bg-hijau px-4 py-2 rounded-sm text-xs font-medium text-white font-paragraph dark:bg-primary-900 dark:text-primary-300">
                                Tersedia
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
                            Emas Batangan - 0.5 gr
                        </a>

                        <ul class="mt-2 flex items-center gap-4">
                            <li class="flex items-center gap-2">
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400 font-paragraph">Merek: Antam
                                </p>
                            </li>

                            <li class="flex items-center gap-2">
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400 font-paragraph">Berat: 0.5
                                    gram</p>
                            </li>
                        </ul>

                        <div class="mt-4 flex items-center justify-between gap-4">
                            <p class="text-2xl font-paragraph font-extrabold leading-tight text-hijau dark:text-white">Rp
                                740,000</p>
                            <button type="button"
                                class="inline-flex items-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4  focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                                </svg>
                                Add to cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="border border-abu bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <div class="h-56 w-auto overflow-hidden">
                        <a href="#">
                            <img class="mx-auto h-full dark:hidden" src="{{ asset('assets/img/sample-product.png') }}"
                                alt="sample product foto" />
                            <img class="mx-auto hidden h-full dark:block"
                                src="{{ asset('assets/img/sample-product.png') }}" alt="sample product foto" />
                        </a>
                    </div>
                    <div>
                        <div class="mb-4 flex items-center justify-between gap-4">
                            <span
                                class="me-2 bg-hijau px-4 py-2 rounded-sm text-xs font-medium text-white font-paragraph dark:bg-primary-900 dark:text-primary-300">
                                Tersedia
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
                            Emas Batangan - 0.5 gr
                        </a>

                        <ul class="mt-2 flex items-center gap-4">
                            <li class="flex items-center gap-2">
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400 font-paragraph">Merek: Antam
                                </p>
                            </li>

                            <li class="flex items-center gap-2">
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400 font-paragraph">Berat: 0.5
                                    gram</p>
                            </li>
                        </ul>

                        <div class="mt-4 flex items-center justify-between gap-4">
                            <p class="text-2xl font-paragraph font-extrabold leading-tight text-hijau dark:text-white">Rp
                                740,000</p>
                            <button type="button"
                                class="inline-flex items-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4  focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                                </svg>
                                Add to cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- list product end --}}

    {{-- section penawaran / promo start --}}
    <section class="bg-putih">
        <div class="max-w-screen-2xl px-4 mx-auto pb-12">
            <div class="min-h-screen bg-red-500">

            </div>
        </div>
    </section>
    {{-- section penawaran / promo end --}}
@endsection
