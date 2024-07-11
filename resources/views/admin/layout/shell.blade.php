<nav class="fixed top-0 z-50 w-full border-b border-abu shadow-sm bg-putih start-0">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
                <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar"
                    aria-controls="default-sidebar" type="button"
                    class="p-2 text-md text-gray-500 rounded-sm block md:hidden hover:bg-gray-100 dark:hover:bg-gray-700">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>
                <div class="block px-2">
                    <a href="{{ url('/') }}" class="flex items-center">
                        <img src="{{ asset('assets/img/logo-keygold.png') }}" class="block h-8 lg:h-12"
                            alt="Key Gold Logo" />
                    </a>
                </div>
            </div>

            <div class="flex items-center gap-4 md:gap-12">
                <button type="button"
                    class="flex mx-3 text-md font-semibold tracking-wide items-center text-emas md:mr-0 rounded-xl gap-4"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                    <span class="sr-only">Open user menu</span>
                    <i class="fa-solid fa-user fa-xl"></i>
                    <p class="hidden md:block md:text-md">
                        {{ auth()->guard('web')->user()->nama_lengkap }}
                    </p>
                </button>
                <form action="{{ route('auth.logout') }}" method="POST">
                    @csrf
                    <div
                        class="mx-3 text-md font-semibold tracking-wide text-emas hover:text-hijau md:mr-0 rounded-xl gap-4">
                        <div>
                            <button type="submit">
                                <i class="fa-solid fa-arrow-right-from-bracket fa-xl"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="z-50 hidden my-4 text-base list-none bg-putih divide-y divide-gray-100 shadow dark:bg-neutral-800 dark:divide-gray-600"
                id="dropdown-user">
                <ul>
                    <li>
                        <a href="#" class="block px-4 py-3 text-emas hover:bg-gray-100">
                            <div class="space-x-4 font-medium flex items-center justify-start text-md">
                                <i class="fa-solid fa-gear"></i>
                                <span>Pengaturan</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <form action="{{ route('auth.logout') }}" method="POST"
                            class="block px-4 py-3 text-emas hover:bg-gray-100">
                            @csrf
                            <button type="submit">
                                <div class="space-x-4 font-medium flex items-center justify-start text-md">
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                    <span>Logout</span>
                                </div>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<aside id="default-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-full pt-20 transition-transform -translate-x-full bg-putih border-r border-gray-100 sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full flex flex-col justify-between px-3 pb-4 overflow-y-auto bg-putih">
        <ul class="space-y-4 font-semibold tracking-wide">
            <li>
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center gap-8 p-2 text-emas rounded-lg dark:text-secondary hover:text-hijau hover:bg-abu group">
                    <div class="w-5 h-6 text-emas transition duration-75 group-hover:text-hijau">
                        <i class="fa-solid fa-layer-group fa-lg"></i>
                    </div>
                    <span class="ms-4">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.product') }}"
                    class="flex items-center gap-8 p-2 text-emas rounded-lg dark:text-secondary hover:text-hijau hover:bg-abu group">
                    <div class="w-5 h-6 text-emas transition duration-75 group-hover:text-hijau">
                        <i class="fa-solid fa-box-open fa-lg"></i>
                    </div>
                    <span class="ms-4">Produk</span>
                </a>
            </li>
        </ul>

        <div>
            <ul class="space-y-4 font-semibold tracking-wide">
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-emas rounded-lg dark:text-secondary hover:text-hijau hover:bg-abu group">
                        <div class="w-5 h-6 text-gray-500 transition duration-75 group-hover:text-hijau">
                            <i class="fa-solid fa-gear fa-lg"></i>
                        </div>
                        <span class="ms-4">Pengaturan</span>
                    </a>
                </li>
                <li>
                    <form action="{{ route('auth.logout') }}" method="POST"
                        class="flex items-center p-2 text-emas rounded-lg dark:text-secondary hover:text-hijau hover:bg-abu group">
                        @csrf
                        <button type="submit">
                            <div class="w-full h-6 text-gray-500 transition duration-75 group-hover:text-hijau">
                                <div>
                                    <i class="fa-solid fa-arrow-right-from-bracket fa-lg"></i>
                                    <span class="ms-3">Logout</span>
                                </div>
                            </div>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</aside>
