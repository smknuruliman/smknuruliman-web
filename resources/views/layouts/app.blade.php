<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&amp;display=swap" rel="stylesheet" />
</head>
<style>
    header ul li a:hover,
    #sidebar li a:hover,
    .nav-active {
        color: #fed700 !important;
        font-weight: bold;
    }
</style>

<body>
    <header id="header"
        class="w-[100%] mx-auto px-7 py-4 md:py-6 flex items-center justify-between fixed w-full top-0 text-white z-50">
        <div class="flex items-center space-x-2">
            <div class="flex gap-4 items-center">
                <img src="{{ asset('images/logo.webp') }}" alt="Bantuin-online" class="w-[50px]">
                <h1 class="text-[20px] text-white font-bold hidden md:block">SMK NURUL IMAN</h1>
            </div>
        </div>
        <!-- Hamburger button for mobile -->
        <button aria-expanded="false" aria-label="Toggle menu" class="md:hidden relative w-8 h-8 focus:outline-none"
            id="menu-btn">
            <span class="block absolute h-0.5 w-6 bg-white rounded left-1 top-2 transition-transform duration-300">
            </span>
            <span class="block absolute h-0.5 w-4 bg-white rounded right-1 top-4.5 transition-opacity duration-300">
            </span>
            <span class="block absolute h-0.5 w-6 bg-white rounded left-1 top-6 transition-transform duration-300">
            </span>
        </button>
        <nav class="hidden md:flex text-white items-center space-x-6 text-[15px] font-normal" id="menu">
            <a class="hover:text-[#fed700] whitespace-nowrap" href="/#Beranda">
                Beranda
            </a>
            <div class="relative group">
                <button aria-expanded="false" aria-haspopup="true"
                    class="flex items-center space-x-1 hover:underline focus:outline-none whitespace-nowrap">
                    <span>
                        <a href="#about">
                            Profil Sekolah
                        </a>
                    </span>
                    <!-- Icon dropdown -->
                    <svg class="w-4 h-4 text-white group-hover:rotate-180 transition-transform duration-300" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
                <!-- Dropdown -->
                <div
                    class="absolute left-0 -mt-[1px] w-48 bg-white border border-gray-200 rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-300">
                    <a href="/profile-sekolah#sambutan" class="text-black block px-4 py-2 hover:bg-gray-100">Sambutan
                        Kepsek</a>
                    <a href="/profile-sekolah#sejarah" class="text-black block px-4 py-2 hover:bg-gray-100">Sejarah
                        Sekolah</a>
                    <a href="/profile-sekolah#vimi" class="text-black block px-4 py-2 hover:bg-gray-100">Visi & Misi</a>
                    <a href="/profile-sekolah#guru" class="text-black block px-4 py-2 hover:bg-gray-100">Guru &
                        Tendik</a>
                    <a href="/profile-sekolah#fasilitas" class="text-black block px-4 py-2 hover:bg-gray-100">Fasilitas
                        Sekolah</a>
                </div>
            </div>
            <a class="hover:text-[#fed700] whitespace-nowrap" href="/#berita">
                Artikel & Berita
            </a>
            <a class="hover:text-[#fed700] whitespace-nowrap" href="/#eskul">
                Ekstrakulikuler
            </a>
            <div class="relative group">
                <button aria-expanded="false" aria-haspopup="true"
                    class="flex items-center space-x-1 hover:underline focus:outline-none whitespace-nowrap">
                    <span>
                        <a href="/#jurusan">
                            Jurusan
                        </a>
                    </span>
                    <!-- Icon dropdown -->
                    <svg class="w-4 h-4 text-white group-hover:rotate-180 transition-transform duration-300" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
                <!-- Dropdown -->
                <div
                    class="absolute text-black left-0 -mt-[1px] w-auto bg-white border border-gray-200 rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-300">
                    <a href="/jurusan#rpl" class="text-black block px-4 py-2 hover:bg-gray-100">PPLG</a>
                    <a href="/jurusan#akl" class="text-black block px-4 py-2 hover:bg-gray-100">AKL</a>
                    <a href="/jurusan#mp" class="text-black block px-4 py-2 hover:bg-gray-100">MP</a>
                </div>
            </div>
            <a class="hover:text-[#fed700] whitespace-nowrap" href="/#prestasi">
                Prestasi
            </a>
            <div class="relative group">
                <button aria-expanded="false" aria-haspopup="true"
                    class="flex items-center space-x-1 hover:underline focus:outline-none whitespace-nowrap">
                    <span>
                        <a href="">
                            SPMB
                        </a>
                    </span>
                    <!-- Icon dropdown -->
                    <svg class="w-4 h-4 text-white group-hover:rotate-180 transition-transform duration-300" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
                <!-- Dropdown -->
                <div
                    class="absolute text-black -left-10 -mt-[1px] w-[fit-content] bg-white border border-gray-200 rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-300">
                    <a href="/pendaftaran-spmb" class="text-black block px-4 py-2 hover:bg-gray-100">Formulir</a>
                    <a href="/#berita" class="text-black block px-4 py-2 hover:bg-gray-100">Info Spmb</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- Mobile menu -->
    <div aria-hidden="true" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden" id="mobile-menu">
    </div>
    <nav aria-label="Mobile Navigation"
        class="fixed top-0 left-0 bottom-0 w-64 bg-white z-50 transform -translate-x-full transition-transform duration-300 ease-in-out"
        id="mobile-nav">
        <div class="flex items-center justify-between px-6 py-6 border-b border-gray-200">
            <div class="flex items-center space-x-2">
                <span class="font-semibold text-xl select-none">
                    Menu
            </div>
            <button aria-label="Close menu" class="text-gray-700 hover:text-black focus:outline-none"
                id="mobile-menu-close">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                </svg>
            </button>
        </div>
        <ul class="px-6 py-4 space-y-4 text-base font-normal">
            <li>
                <a class="block hover:underline" href="/#">
                    Beranda
                </a>
            </li>
              <div class="relative group bg-white">
                <button aria-expanded="false" aria-haspopup="true"
                    class="flex items-center space-x-1 hover:underline focus:outline-none whitespace-nowrap">
                    <span>
                        <span>Profil Sekolah</span>
                    </span>
                    <!-- Icon dropdown -->
                    <svg class="w-4 h-4 text-black group-hover:rotate-180 transition-transform duration-300" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>

                <!-- Dropdown -->
                <div
                    class="absolute left-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-300 z-50">
                    <a href="/profile-sekolah#sambutan" class="block px-4 py-2 text-black hover:bg-gray-100">Sambutan
                        Kepsek</a>
                    <a href="/profile-sekolah#vimi" class="block px-4 py-2 text-black hover:bg-gray-100">Visi & Misi</a>
                    <a href="/profile-sekolah#sejarah" class="block px-4 py-2 text-black hover:bg-gray-100">Sejarah
                        Sekolah</a>
                    <a href="/profile-sekolah#guru" class="block px-4 py-2 text-black hover:bg-gray-100">Guru &
                        Tendik</a>
                    <a href="/profile-sekolah#fasilitas" class="block px-4 py-2 text-black hover:bg-gray-100">Fasilitas
                        Sekolah</a>
                </div>
            </div>
            <li>
                <a class="block hover:underline" href="/#berita">
                    Artikel & Berita
                </a>
            </li>
            <li>
                <a class="block hover:underline" href="/#eskul">
                    Ekstrakulikuler
                </a>
            </li>
            <div class="relative group bg-white">
                <button aria-expanded="false" aria-haspopup="true"
                    class="flex items-center space-x-1 hover:underline focus:outline-none whitespace-nowrap">
                    <span>
                        <span>Jurusan</span>
                    </span>
                    <!-- Icon dropdown -->
                    <svg class="w-4 h-4 text-black group-hover:rotate-180 transition-transform duration-300" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>

                <!-- Dropdown -->
                <div
                    class="absolute left-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-300 z-50">
                    <a href="/jurusan#rpl" class="block px-4 py-2 text-black hover:bg-gray-100">PPLG</a>
                    <a href="/jurusan#akl" class="block px-4 py-2 text-black hover:bg-gray-100">AKL</a>
                    <a href="/jurusan#mp" class="block px-4 py-2 text-black hover:bg-gray-100">MP</a>
                </div>
            </div>
            <a class="block hover:underline" href="/#prestasi">
                Prestasi
            </a>
            <div class="relative group">
                <button aria-expanded="false" aria-haspopup="true"
                    class="flex items-center space-x-1 hover:underline focus:outline-none whitespace-nowrap">
                    <span>
                        <span>
                            SPMB
                        </span>
                    </span>
                    <!-- Icon dropdown -->
                    <svg class="w-4 h-4 text-white group-hover:rotate-180 transition-transform duration-300" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
                <!-- Dropdown -->
                <div
                    class="absolute text-black -left-[20PX] -mt-[1px] w-[fit-content] bg-white border border-gray-200 rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-300">
                    <a href="/pendaftaran-spmb" class="text-black block px-4 py-2 hover:bg-gray-100">Formulir</a>
                    <a href="/#berita" class="text-black block px-4 py-2 hover:bg-gray-100">Info Spmb</a>
                </div>
            </div>
        </ul>
    </nav>
    <!-- ======== navbar/header endddd ========== -->

    <div class="content">
        @yield('content')
    </div>

    <!-- ======= footer ======= -->
    <footer class="bg-[black] text-white px-6 md:px-10 py-12">
        <div class="max-w-7xl mx-auto">
            <section class="relative flex justify-between items-center mb-12 flex-col md:flex-row gap-6">
                <div class="w-full md:w-auto text-left">
                    <h1 class="text-4xl  md:text-5xl lg:text-7xl font-extrabold leading-tight">
                        Daftarkan sekarang di <br>
                        Smk <span class="">Nurul Iman</span>
                    </h1>
                </div>
            </section>
            <!-- Garis atas -->
            <div class="border-t border-gray-600 pt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8">

                <!-- Profile -->
                <div class="lg:col-span-2">
                    <h2 class="text-xl font-bold mb-2">SMK NURUL IMAN</h2>
                    @foreach ($homepage as $footerdesc)
                    <p class="text-gray-300">
                        {{ $footerdesc->footer_desc }}
                    </p>
                    @endforeach
                </div>

                <!-- Address -->
                <div class="max-w-[400px] breaks-word">
                    <h3 class="text-lg font-bold mb-2">Alamat:</h3>
                    @foreach ($homepage as $addres)
                    <p class="text-gray-300">{{ $addres->footer_addres }}</p>
                    @endforeach
                </div>

                <!-- Social -->
                <div>
                    <h3 class="text-lg font-bold mb-2">Sosial Media:</h3>
                    <p class="text-gray-300">@Smk_nuruliman</p>
                    <p class="text-gray-300">@osissmk_nuruliman</p>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="text-lg font-bold mb-2">Email:</h3>
                    <div class="whitespace-normal w-fit break-words max-w-[200px]">
                        @foreach ($homepage as $email)
                        <p class="text-gray-300">{{ $email->footer_email }}</p>
                        @endforeach
                    </div>

                    <h3 class="text-lg font-bold mt-4 mb-2">Phone Number</h3>
                    <p class="text-gray-300">(021)8506347</p>
                </div>
            </div>

            <!-- Bottom Navbar -->
            <div
                class="border-t border-gray-600 mt-8 pt-6 flex flex-wrap justify-center gap-2 text-gray-300 text-sm md:text-base">
                © 2024 –
                <span class="relative group font-bold cursor-pointer w-fit">
                    RPL
                    <span
                        class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 hidden group-hover:block bg-gray-800 text-white text-sm rounded-lg px-3 py-6 whitespace-nowrap shadow-lg">
                        Dibuat oleh: <a href="">GenFirst.dev 2025</a>
                    </span>
                </span>. All rights reserved
                <!-- <script>document.write(new Date().getFullYear())</script> -->
            </div>
        </div>
    </footer>
    <!-- ======= footer end ====== -->

    <!-- ====== panggil js ====== -->
    <script src="{{ asset('js-layouts/app.js') }}"></script>
</body>

</html>