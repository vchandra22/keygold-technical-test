@extends('frontend.layout.app')

@section('content')
    {{-- section login start --}}
    <section class="mt-[4.1rem] bg-putih">
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
                        <div class="w-full p-6 space-y-4 sm:py-12 bg-putih border border-abu">
                            <h2 class="text-3xl font-bold text-hijau">
                                Masuk ke Akun Anda
                            </h2>

                            {{-- login form start --}}
                            <form class="mt-8 space-y-6" action="#" method="POST">
                                @csrf
                                {{-- input username start --}}
                                <div>
                                    <label for="email" class="block mb-2 text-sm font-medium text-hijau">
                                        Alamat email
                                    </label>
                                    <input type="email" name="email" id="email"
                                        class="bg-putih border border-hijau text-hijau text-md focus:ring-emas focus:border-emas block w-full p-2.5"
                                        placeholder="Gunakan Alamat email terdaftar untuk bisa masuk"
                                        value="{{ old('email') }}" required autofocus />
                                </div>
                                {{-- input username end --}}

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
                                    Tidak punya akun? <a href="#" class="text-emas underline">Register</a>
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
