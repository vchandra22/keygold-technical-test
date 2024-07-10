<section class="navbar-section-area">

    <nav class="bg-putih dark:bg-hijau fixed w-full z-20 top-0 start-0 border-b border-abu dark:border-gray-600">
        <div class="max-w-screen-2xl flex flex-wrap items-center justify-between mx-auto px-4 py-2 lg:px-4 lg:py-2">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('assets/img/logo-keygold.png') }}" class="h-10 md:h-12"
                    alt="PT Key Gold Investama Logo">
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse items-center">
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-emas md:hidden focus:outline-none focus:ring-2 focus:ring-emas focus:text-putih focus:bg-emas dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                    class="flex items-center justify-between w-full text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                    <img src="{{ asset('assets/icons/person.png') }}" alt="icons-person">
                </button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbar"
                    class="z-30 hidden font-normal bg-putih divide-y divide-gray-100 rounded-sm shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <ul class="text-md font-medium tracking-wide text-emas dark:text-gray-200"
                        aria-labelledby="dropdownLargeButton">
                        <li>
                            <a href="#"
                                class="block px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Masuk
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Register
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 text-md lg:text-lg font-medium border border-abu rounded-none bg-putih md:space-x-8 lg:space-x-24 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-putih dark:bg-gray-800 md:dark:bg-hijau dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white bg-emas rounded md:bg-transparent md:text-emas md:p-0 md:dark:text-blue-500"
                            aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-hijau rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-emas md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Produk</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-hijau rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-emas md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Artikel
                            & Berita</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-hijau rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-emas md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tentang
                            Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</section>
