@extends('admin.layout.app')

@section('content')
    @include('admin.layout.shell')
    <div class="p-4 sm:ml-64 bg-putih min-h-screen pt-[4.2rem]">
        <div class="p-1 md:p-4">
            <div class="grid grid-cols-3 gap-4">
                <div class="border border-abu rounded-sm shadow-sm p-6 bg-putih">
                    <div class="space-y-2">
                        <i class="fa-solid text-hijau fa-box-open fa-2xl pb-4"></i>
                        <h2 class="text-5xl font-bold font-paragraph text-emas">120</h2>
                        <p class="text-emas tracking-wide font-md">Total Produk</p>
                    </div>
                </div>
                <div class="border border-abu rounded-sm shadow-sm p-6 bg-putih">
                    <div class="space-y-4">
                        <i class="fa-solid text-hijau fa-users fa-2xl pb-4"></i>
                        <h2 class="text-5xl font-bold font-paragraph text-emas">120</h2>
                        <p class="text-emas tracking-wide font-md">Total Pengguna</p>
                    </div>
                </div>
                <div class="border border-abu rounded-sm shadow-sm p-6 bg-putih">
                    <div class="space-y-4">
                        <i class="fa-solid text-hijau fa-hand-holding-dollar fa-2xl pb-4"></i>
                        <h2 class="text-5xl font-bold font-paragraph text-emas">Rp. 1200000</h2>
                        <p class="text-emas tracking-wide font-md">Pendapatan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
