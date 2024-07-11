@extends('frontend.layout.app')

@section('content')
    {{-- section login start --}}
    <section class="mt-[4.1rem] bg-putih">

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

        <div class="max-w-screen-2xl min-h-screen mx-auto h-screen grid items-center">
            <div>
                <div
                    class="py-8 px-4 md:px-16 mx-auto max-w-screen-2xl lg:py-16 grid lg:grid-cols-2 gap-0 lg:gap-16 dark:border dark:border-1 justify-between">
                    <div class="hidden md:flex flex-col justify-center text-center lg:text-start">
                        <h1
                            class="mb-1 md:mb-4 text-2xl font-bold tracking-tight leading-none text-hijau md:text-5xl lg:text-6xl">
                            Silakan masuk untuk mengakses akun dan mulailah perjalanan investasi Anda
                        </h1>
                    </div>
                    <div>
                        <div class="w-full p-6 space-y-4 sm:py-12 bg-putih border border-abu shadow-sm">
                            <h2 class="text-3xl font-bold text-hijau">
                                Masuk ke Akun Anda
                            </h2>

                            {{-- login form start --}}
                            <form class="mt-8 space-y-6" action="{{ route('auth.authenticate') }}" method="POST">
                                @csrf
                                {{-- input email start --}}
                                <div>
                                    <label for="email" class="block mb-2 text-sm font-medium text-hijau">
                                        Alamat email
                                    </label>
                                    <input type="email" name="email" id="email"
                                        class="bg-putih border border-hijau text-hijau text-md focus:ring-emas focus:border-emas block w-full p-2.5"
                                        placeholder="Gunakan Alamat email terdaftar untuk bisa masuk"
                                        value="{{ old('email') }}" required autofocus />
                                </div>
                                {{-- input email end --}}

                                {{-- input password start --}}
                                <div>
                                    <label for="password" class="block mb-2 text-sm font-medium text-hijau">
                                        Password</label>
                                    <input type="password" name="password" id="password" placeholder="••••••••"
                                        class="bg-putih border border-hijau text-hijau text-sm focus:ring-emas focus:border-emas block w-full p-2.5"
                                        required />
                                </div>
                                {{-- input password end --}}


                                <div class="flex items-center">
                                    {{-- remember me start --}}
                                    <div class="flex items-start h-5">
                                        <input id="remember" aria-describedby="remember" name="remember" type="checkbox"
                                            value="1"
                                            class="w-4 h-4 border-hijau bg-gray-100 focus:ring-3 focus:ring-emas dark:focus:ring-neutral-600 dark:ring-offset-gray-800 dark:bg-neutral-700 dark:border-neutral-700" />
                                    </div>
                                    <div class="ms-3 text-sm">
                                        <label for="remember" class="font-medium text-hijau dark:text-hijau">Ingat
                                            saya</label>
                                    </div>
                                    {{-- remember me end --}}

                                    {{-- forgot password start --}}
                                    {{-- <a href="#"
                                                class="ms-auto text-sm font-medium text-accent hover:text-primary-500 hover:underline dark:text-abu-500">Lupa
                                                Password?
                                            </a> --}}
                                    {{-- forgot password end --}}
                                </div>

                                {{-- button login start --}}
                                <button type="submit"
                                    class="w-full px-8 py-2 text-base font-medium text-center text-putih bg-emas rounded-none hover:bg-hijau focus:ring-2 focus:ring-emas sm:w-auto">
                                    Login
                                </button>
                                {{-- button login end --}}

                                {{-- don't have account start --}}
                                <div class="text-sm font-medium text-hijau">
                                    Tidak punya akun? <a href="{{ route('auth.register') }}"
                                        class="text-emas underline">Register</a>
                                </div>
                                {{-- don't have account end --}}

                            </form>
                            {{-- login form end --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- section login end --}}
@endsection
