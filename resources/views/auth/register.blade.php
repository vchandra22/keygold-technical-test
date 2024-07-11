@extends('frontend.layout.app')

@section('content')
    {{-- section login start --}}
    <section class="mt-[4.1rem] bg-putih">
        <div class="max-w-screen-2xl min-h-screen mx-auto h-full grid items-center">
            <div>
                <div
                    class="py-8 px-4 md:px-16 mx-auto max-w-screen-2xl lg:py-16 grid lg:grid-cols-2 gap-0 lg:gap-16 dark:border dark:border-1 justify-between">
                    <div class="hidden md:flex flex-col justify-center text-center lg:text-start">
                        <h1
                            class="mb-1 md:mb-4 text-2xl font-bold tracking-tight leading-none text-hijau md:text-5xl lg:text-6xl">
                            Daftarkan akun Anda untuk mendapatkan akses eksklusif dan keuntungan menarik
                        </h1>
                    </div>
                    <div>
                        <div class="w-full p-6 space-y-4 sm:py-12 bg-putih border border-abu shadow-sm">
                            <h2 class="text-3xl font-bold text-hijau">
                                Daftar Akun Baru
                            </h2>



                            {{-- login form start --}}
                            <form class="mt-12 space-y-6" action="{{ route('auth.sign-up') }}" method="POST">
                                @csrf

                                {{-- input no.identitas start --}}
                                <div>
                                    <label for="no_identitas" class="block mb-2 text-sm font-medium text-hijau">
                                        No. Identitas (KTP, SIM, Paspor)
                                    </label>
                                    <input type="no_identitas" name="no_identitas" id="no_identitas"
                                        class="bg-putih border border-hijau text-hijau text-md focus:ring-emas focus:border-emas block w-full p-2.5"
                                        placeholder="Masukkan nomor identitas berupa nomor KTP, SIM, atau Paspor"
                                        value="{{ old('no_identitas') }}" required autofocus />
                                    @error('no_identitas')
                                        <div class="mt-1 text-red-500 text-xs">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                {{-- input no.identitas end --}}

                                {{-- input nama lengkap start --}}
                                <div>
                                    <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-hijau">
                                        Nama Lengkap
                                    </label>
                                    <input type="nama_lengkap" name="nama_lengkap" id="nama_lengkap"
                                        class="bg-putih border border-hijau text-hijau text-md focus:ring-emas focus:border-emas block w-full p-2.5"
                                        placeholder="Vincent Chandra" value="{{ old('nama_lengkap') }}" required />
                                    @error('nama_lengkap')
                                        <div class="mt-1 text-red-500 text-xs">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                {{-- input nama lengkap end --}}

                                {{-- input no.hp start --}}
                                <div>
                                    <label for="no_hp" class="block mb-2 text-sm font-medium text-hijau">
                                        No. HP
                                    </label>
                                    <input type="no_hp" name="no_hp" id="no_hp"
                                        class="bg-putih border border-hijau text-hijau text-md focus:ring-emas focus:border-emas block w-full p-2.5"
                                        placeholder="081244566666" value="{{ old('no_hp') }}" required />
                                    @error('no_hp')
                                        <div class="mt-1 text-red-500 text-xs">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                {{-- input no.hp end --}}

                                {{-- input alamat start --}}
                                <div>
                                    <label for="alamat" class="block mb-2 text-sm font-medium text-hijau">
                                        Alamat
                                    </label>
                                    <input type="alamat" name="alamat" id="alamat"
                                        class="bg-putih border border-hijau text-hijau text-md focus:ring-emas focus:border-emas block w-full p-2.5"
                                        placeholder="Gunakan alamat saat ini Anda tinggal" value="{{ old('alamat') }}"
                                        required />
                                    @error('alamat')
                                        <div class="mt-1 text-red-500 text-xs">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                {{-- input alamat end --}}

                                {{-- input email start --}}
                                <div>
                                    <label for="email" class="block mb-2 text-sm font-medium text-hijau">
                                        Email
                                    </label>
                                    <input type="email" name="email" id="email"
                                        class="bg-putih border border-hijau text-hijau text-md focus:ring-emas focus:border-emas block w-full p-2.5"
                                        placeholder="vincentchaandra@gmail.com" value="{{ old('email') }}" required />
                                    @error('email')
                                        <div class="mt-1 text-red-500 text-xs">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                {{-- input email end --}}

                                {{-- input password start --}}
                                <div>
                                    <label for="password" class="block mb-2 text-sm font-medium text-hijau">
                                        Password</label>
                                    <input type="password" name="password" id="password" placeholder="••••••••"
                                        class="bg-putih border border-hijau text-hijau text-sm focus:ring-emas focus:border-emas block w-full p-2.5"
                                        required />
                                    @error('password')
                                        <div class="mt-1 text-red-500 text-xs">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div>
                                    <label for="password_confirmation" class="block mb-2 text-sm font-medium text-hijau">
                                        Konfirmasi Password</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        placeholder="••••••••"
                                        class="bg-putih border border-hijau text-hijau text-sm focus:ring-emas focus:border-emas block w-full p-2.5"
                                        required />
                                    @error('password')
                                        <div class="mt-1 text-red-500 text-xs">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                {{-- input password end --}}

                                {{-- button daftar start --}}
                                <button type="submit"
                                    class="w-full px-8 py-2 text-base font-medium text-center text-putih bg-emas rounded-none hover:bg-hijau focus:ring-2 focus:ring-emas sm:w-auto">
                                    Daftar
                                </button>
                                {{-- button daftar end --}}

                                {{-- don't have account start --}}
                                <div class="text-sm font-medium text-hijau">
                                    Sudah punya akun? <a href="{{ route('auth.login') }}"
                                        class="text-emas underline">Masuk</a>
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
