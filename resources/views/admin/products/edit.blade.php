@extends('admin.layout.app')

@section('content')
    @include('admin.layout.shell')

    <div class="p-4 sm:ml-64 bg-putih min-h-screen pt-[4.2rem]">
        <div class="p-1 md:p-4 space-y-8">
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
                    <div class="ms-3 text-md font-normal">{{ session('loginError') }}</div>
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
                    <div class="ms-3 text-md font-normal">{{ session('success') }}</div>
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

            <div class="flex flex-col lg:flex-row justify-between items-start lg:items-end">
                <h1 class="text-hijau text-5xl font-bold tracking-wide">
                    {{ $pageTitle }}
                </h1>
                <form id="delete-product-{{ $productData->uuid }}"
                    action="{{ route('admin.deleteProduct', ['uuid' => $productData->uuid]) }}" method="POST">
                    @csrf
                    @method('delete')
                    <div class="px-0 text-md text-red-500">
                        <button class="delete-button hover:underline" data-id="{{ $productData->uuid }}" type="submit"
                            value="Delete">Hapus Produk
                        </button>
                    </div>
                </form>
            </div>

            <div>
                <form action="{{ route('admin.updateProduct', $productData->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="space-y-6">
                        <div>
                            <label for="nama_produk" class="block mb-2 text-md font-medium text-hijau">Nama
                                Produk <span class="text-red-500">*</span></label>
                            <input type="text" name="nama_produk" id="nama_produk"
                                class="bg-putih border border-abu text-hijau text-md block w-full p-2.5 focus:ring-emas focus:border-emas"
                                placeholder="Masukkan nama produk" required autofocus
                                value="{{ $productData->nama_produk }}" />
                            @error('nama_produk')
                                <div class="mt-1 text-red-500 text-xs">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div>
                            <label for="deskripsi_produk" class="block mb-2 text-md font-medium text-hijau">Deskripsi Produk
                                <span class="text-red-500">*</span></label>
                            <textarea name="deskripsi_produk" id="deskripsi_produk" rows="4"
                                class="bg-putih border border-abu text-hijau text-md block w-full p-2.5 focus:ring-emas focus:border-emas">{{ $productData->deskripsi_produk }}</textarea>
                            @error('deskripsi_produk')
                                <div class="mt-1 text-red-500 text-xs">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div>
                            <label for="merek" class="block mb-2 text-md font-medium text-hijau">Merek <span
                                    class="text-red-500">*</span></label>
                            <input type="text" name="merek" id="merek"
                                class="bg-putih border border-abu text-hijau text-md block w-full p-2.5 focus:ring-emas focus:border-emas"
                                placeholder="Masukkan merek" required value="{{ $productData->merek }}" />
                            @error('merek')
                                <div class="mt-1 text-red-500 text-xs">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div>
                            <label for="berat" class="block mb-2 text-md font-medium text-hijau">Berat <span
                                    class="text-red-500">*</span></label>
                            <input type="text" name="berat" id="berat"
                                class="bg-putih border border-abu text-hijau text-md block w-full p-2.5 focus:ring-emas focus:border-emas"
                                placeholder="Masukkan berat" required value="{{ $productData->berat }}" />
                            @error('berat')
                                <div class="mt-1 text-red-500 text-xs">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div>
                            <label for="harga_jual" class="block mb-2 text-md font-medium text-hijau">Harga Jual
                                (Rp.)<span class="text-red-500">*</span></label>
                            <input type="text" name="harga_jual" id="harga_jual"
                                class="bg-putih border border-abu text-hijau text-md block w-full p-2.5 focus:ring-emas focus:border-emas"
                                placeholder="Masukkan harga_jual" required value="{{ $productData->harga_jual }}" />
                            @error('harga_jual')
                                <div class="mt-1 text-red-500 text-xs">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div>
                            <label for="total_stock" class="block mb-2 text-md font-medium text-hijau">Stock <span
                                    class="text-red-500">*</span></label>
                            <input type="text" name="total_stock" id="total_stock"
                                class="bg-putih border border-abu text-hijau text-md block w-full p-2.5 focus:ring-emas focus:border-emas"
                                placeholder="Masukkan stock" required value="{{ $productData->total_stock }}" />
                            @error('total_stock')
                                <div class="mt-1 text-red-500 text-xs">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div>
                            <label for="status" class="block mb-2 text-md font-medium text-hijau">
                                Status <span class="text-red-500">*</span>
                            </label>
                            <select type="text" name="status" id="status"
                                class="bg-putih border border-abu text-hijau text-md focus:ring-emas focus:border-emas block w-full p-2.5">
                                <option value="tersedia" selected>
                                    Tersedia
                                </option>
                                <option value="habis">
                                    Habis
                                </option>
                            </select>
                            @error('status')
                                <div class="mt-1 text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <label for="gambar" class="block mb-2 text-md font-medium text-hijau">
                                Foto / Gambar <span class="text-red-500">*</span>
                            </label>
                            <div class="upload-img-box h-auto w-full md:max-w-sm">
                                @if ($productData->gambar != null && $productData->gambar != '')
                                    <img class="h-56 w-full overflow-y-hidden border-abu-500 rounded-sm border-2"
                                        src="{{ getImageFile($productData->gambar) }}">
                                @else
                                    <img src="{{ getImageFile($productData->gambar) }}">
                                @endif
                                <input type="file" name="gambar" id="gambar" accept="image/*"
                                    class="mt-2 w-full text-md text-hijau border border-abu cursor-pointer bg-gray-100 hover:bg-gray-50 focus:ring-emas focus:border-emas"
                                    value="{{ $productData->gambar }}" onchange="previewFile(this)">
                            </div>
                            @error('gambar')
                                <div class="mt-1 text-red-500 text-xs">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="pt-8">
                        <label for="meta_title" class="block mb-2 text-md font-medium text-hijau">Meta
                            Title</label>
                        <input type="text" name="meta_title" id="meta_title"
                            class="bg-putih border border-abu text-hijau text-md focus:ring-emas focus:border-emas block w-full p-2.5"
                            value="{{ old('meta_title') }}" />
                        @error('meta_title')
                            <div class="mt-1 text-red-500 text-xs">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        <label for="meta_description" class="block mb-2 text-md font-medium text-hijau">Meta
                            Description</label>
                        <textarea name="meta_description" id="meta_description" rows="4"
                            class="bg-putih border border-abu text-hijau text-md focus:ring-emas focus:border-emas block w-full p-2.5 text-start">{{ old('meta_description') }}</textarea>
                        @error('meta_description')
                            <div class="mt-1 text-red-500 text-xs">
                                {{ $message }}
                            </div>
                        @enderror
                        <ul class="list-disc ms-5 text-gray-500">
                            <li>
                                <p class="mt-1 text-xs text-gray-500">
                                    Google hanya menampilkan panjang karakter 155 - 160 karaketer.
                                </p>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <label for="meta_keywords" class="block mb-2 text-md font-medium text-hijau">Meta
                            Keyword</label>
                        <input type="text" name="meta_keywords" id="meta_keywords"
                            class="bg-putih border border-abu text-hijau text-md focus:ring-emas focus:border-emas block w-full p-2.5"
                            value="{{ old('meta_keywords') }}" />
                        @error('meta_keywords')
                            <div class="mt-1 text-red-500 text-xs">
                                {{ $message }}
                            </div>
                        @enderror
                        <ul class="list-disc ms-5 text-gray-500">
                            <li>
                                <p class="mt-1 text-xs text-gray-500">
                                    Pisahkan dengan tanda koma (,) per-keyword
                                </p>
                            </li>
                            <li>
                                <p class="mt-1 text-xs text-gray-500">
                                    Contoh: investasi emas, beli emas batangan, emas murni, investasi jangka panjang,
                                </p>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <label for="og_image" class="block mb-2 text-md font-medium text-hijau">
                            OG Image</label>
                        <div class="upload-img-box h-auto w-full md:max-w-sm">
                            @if ($productData->og_image != null && $productData->og_image != '')
                                <img class="h-56 w-full overflow-y-hidden border-abu-500 rounded-sm border-2"
                                    src="{{ getImageFile($productData->og_image) }}">
                            @else
                                <img src="{{ getImageFile($productData->og_image) }}">
                            @endif
                            <input type="file" name="og_image" id="og_image" accept="image/*"
                                class="mt-2 block w-full text-md text-hijau border border-abu cursor-pointer bg-gray-100 hover:bg-gray-50 focus:ring-emas focus:border-emas"
                                value="{{ $productData->og_image }}" onchange="previewFile(this)">
                        </div>
                        @error('og_image')
                            <div class="mt-1 text-red-500 text-xs">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="flex flex-col items-end">
                        <button type="submit"
                            class="w-full px-20 py-3 text-lg font-medium text-center text-putih bg-hijau rounded-none hover:bg-emas focus:ring-2 focus:ring-emas sm:w-auto">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Main modal -->
    <div id="deleteModal" tabindex="-1" aria-hidden="true"
        class="hidden fixed inset-0 z-50 flex items-center justify-center">
        <!-- Background overlay with opacity -->
        <div class="fixed inset-0 bg-black opacity-50"></div>
        <!-- Modal content -->
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <div class="relative p-4 text-center bg-putih rounded-sm shadow sm:p-5">
                <button type="button"
                    class="text-emas absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-sm text-lg p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="deleteModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <i class="fa-solid fa-triangle-exclamation fa-4x text-red-500 py-4"></i>
                <p class="mb-4 text-hijau font-paragraf text-md">Kamu akan
                    menghapus item ini
                    selamanya. Apakah Kamu yakin?</p>
                <div class="flex justify-center items-center space-x-4">
                    <button data-modal-hide="deleteModal" type="button"
                        class="py-2 px-6 text-sm font-medium text-hijau bg-putih rounded-none border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-400 hover:text-primary-800 focus:z-10 dark:border-neutral-700 dark:hover:text-white dark:hover:bg-neutral-700 dark:focus:ring-gray-600">
                        Tidak, batalkan
                    </button>
                    <button id="confirm-delete-button" type="button"
                        class="py-2 px-6 text-sm font-medium text-center text-white bg-red-500 rounded-none hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                        Iya, Saya Yakin
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get elements
            const deleteButtons = document.querySelectorAll('.delete-button');
            const modal = document.getElementById('deleteModal');
            const confirmDeleteButton = document.getElementById('confirm-delete-button');
            let formToSubmit;

            // Show modal when delete button is clicked
            deleteButtons.forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    formToSubmit = document.getElementById('delete-product-' + this.dataset.id);
                    modal.classList.remove('hidden');
                    modal.classList.add('flex'); // Ensure modal is displayed as flex to center it
                });
            });

            // Submit form when confirm delete button is clicked
            confirmDeleteButton.addEventListener('click', function() {
                formToSubmit.submit();
            });

            // Hide modal when cancel button is clicked or modal close button is clicked
            document.querySelectorAll('[data-modal-toggle="deleteModal"]').forEach(element => {
                element.addEventListener('click', function() {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex'); // Hide the modal correctly
                });
            });
        });
    </script>

    <script>
        ClassicEditor
            .create(document.querySelector('#deskripsi_produk')), {}
            .catch(error => {
                console.error(error);
            });
    </script>

    @push('script')
        <script src="{{ asset('assets/js/custom/image-preview.js') }}"></script>
    @endpush
@endsection
