<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Alternatif</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- ======== header =======  -->
    <header class="flex fixed z-[1000] w-full justify-between bg-black/50 items-center p-4 md:px-10 md:py-6 text-white">
        <div class="text-[17px] md:text-[30px] flex items-center gap-2">
            <img src="{{ asset('images/logo.png') }}" alt="SMK NURUL IMAN" class="w-12 inline">
            <span class="font-bold">SMK NURUL IMAN</span>
        </div>

        <!-- Menu Desktop -->
        <ul class="flex gap-6 hidden md:flex">
            <li><a class="text-lg hover:text-orange-500" href="/">Home</a></li>
            <li class="relative group">
                <button class="flex items-center space-x-1 hover:underline focus:outline-none">
                    <span><a href="/#about">Profil Sekolah</a></span>
                    <i class="fas fa-chevron-down text-xs group-hover:rotate-180 transition-transform"></i>
                </button>
                <!-- Dropdown -->
                <div
                    class="absolute left-0 mt-1 w-48 bg-white text-black rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition">
                    <a href="/profile-sekolah" class="block px-4 py-2 hover:bg-gray-100">Sambutan Kepsek</a>
                    <a href="/profile-sekolah#sejarah" class="block px-4 py-2 hover:bg-gray-100">Sejarah sekolah</a>
                    <a href="/profile-sekolah#vimi" class="block px-4 py-2 hover:bg-gray-100">Visi Misi</a>
                    <a href="/profile-sekolah#guru" class="block px-4 py-2 hover:bg-gray-100">Guru & Tendik</a>
                    <a href="/profile-sekolah#fasilitas" class="block px-4 py-2 hover:bg-gray-100">Fasilitas</a>
                </div>
            </li>
            <li><a class="text-lg hover:text-orange-500" href="/#berita">Artikel & Berita</a></li>
            <li><a class="text-lg hover:text-orange-500" href="/#eskul">Ekstrakurikuler</a></li>
            <li class="relative group">
                <button class="flex items-center space-x-1 hover:underline focus:outline-none">
                    <span><a href="/#about">Jurusan</a></span>
                    <i class="fas fa-chevron-down text-xs group-hover:rotate-180 transition-transform"></i>
                </button>
                <!-- Dropdown -->
                <div
                    class="absolute left-0 mt-1 w-[fit-content] bg-white text-black rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition">
                    <a href="/jurusan#rpl" class="block px-4 py-2 hover:bg-gray-100">PPLG</a>
                    <a href="/jurusan#akl" class="block px-4 py-2 hover:bg-gray-100">AKL</a>
                    <a href="/jurusan#mp" class="block px-4 py-2 hover:bg-gray-100">MP</a>
                </div>
            </li>
            <li class="relative group">
                <button class="flex items-center space-x-1 hover:underline focus:outline-none">
                    <span><a href="/#about">SPMB</a></span>
                    <i class="fas fa-chevron-down text-xs group-hover:rotate-180 transition-transform"></i>
                </button>
                <!-- Dropdown -->
                <div
                    class="absolute left-0 mt-1 w-[fit-content] bg-white text-black rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition">
                    <a href="/pendaftaran-spmb" class="text-black block px-4 py-2 hover:bg-gray-100">Formulir</a>
                    <a href="/#berita" class="text-black block px-4 py-2 hover:bg-gray-100">Info spmb</a>
                </div>
            </li>
        </ul>
        <!-- Tombol Mobile -->
        <button id="menu-toggle" class="md:hidden text-2xl focus:outline-none">
            <i class="fas fa-bars"></i>
        </button>
    </header>

    <!-- Sidebar Mobile -->
    <nav id="mobile-menu"
        class="fixed top-0 left-0 w-[220px] h-[100vh] bg-black text-white p-6 transform -translate-x-full transition-transform duration-300 z-[2000] md:hidden">
        <button id="menu-close" class="fas absolute right-[20px] top-[20px] fa-times text-2xl mb-6"></button>
        <br>
        <br>
        <ul class="flex flex-col gap-6 flex md:hidden">
            <li><a class="text-lg hover:text-orange-500" href="/">Home</a></li>
            <li class="relative group">
                <button class="flex items-center space-x-1 hover:underline focus:outline-none">
                    <span><a href="/#about">Profil Sekolah</a></span>
                    <i class="fas fa-chevron-down text-xs group-hover:rotate-180 transition-transform"></i>
                </button>
                <!-- Dropdown -->
                <div
                    class="absolute left-0 mt-1 w-48 bg-white text-black rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition">
                    <a href="/profile-sekolah" class="block px-4 py-2 hover:bg-gray-100">Sambutan Kepsek</a>
                    <a href="/profile-sekolah#sejarah" class="block px-4 py-2 hover:bg-gray-100">Sejarah sekolah</a>
                    <a href="/profile-sekolah#vimi" class="block px-4 py-2 hover:bg-gray-100">Visi Misi</a>
                    <a href="/profile-sekolah#guru" class="block px-4 py-2 hover:bg-gray-100">Guru & Tendik</a>
                    <a href="/profile-sekolah#fasilitas" class="block px-4 py-2 hover:bg-gray-100">Fasilitas</a>
                </div>
            </li>
            <li><a class="text-lg hover:text-orange-500" href="/#berita">Artikel & Berita</a></li>
            <li><a class="text-lg hover:text-orange-500" href="/#eskul">Ekstrakurikuler</a></li>
            <li class="relative group">
                <button class="flex items-center space-x-1 hover:underline focus:outline-none">
                    <span><a href="/#about">Jurusan</a></span>
                    <i class="fas fa-chevron-down text-xs group-hover:rotate-180 transition-transform"></i>
                </button>
                <!-- Dropdown -->
                <div
                    class="absolute left-0 mt-1 w-48 bg-white text-black rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition">
                    <a href="/jurusan#rpl" class="block px-4 py-2 hover:bg-gray-100">PPLG</a>
                    <a href="/jurusan#akl" class="block px-4 py-2 hover:bg-gray-100">AKL</a>
                    <a href="/jurusan#mp" class="block px-4 py-2 hover:bg-gray-100">MP</a>
                </div>
            </li>
            <li class="relative group">
                <button class="flex items-center space-x-1 hover:underline focus:outline-none">
                    <span><a>SPMB</a></span>
                    <i class="fas fa-chevron-down text-xs group-hover:rotate-180 transition-transform"></i>
                </button>
                <!-- Dropdown -->
                <div
                    class="absolute left-0 mt-1 w-48 bg-white text-black rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition">
                    <a href="/pendaftaran-spmb" class="text-black block px-4 py-2 hover:bg-gray-100">Formulir</a>
                    <a href="/#berita" class="text-black block px-4 py-2 hover:bg-gray-100">Info spmb</a>
                </div>
            </li>
        </ul>
    </nav>
    <!-- ======== end header =======  -->

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const menuToggle = document.getElementById("menu-toggle");
            const menuClose = document.getElementById("menu-close");
            const mobileMenu = document.getElementById("mobile-menu");

            function toggleMenu() {
                mobileMenu.classList.toggle("-translate-x-full");
                mobileMenu.classList.toggle("translate-x-0");
            }

            menuToggle.addEventListener("click", toggleMenu);
            menuClose.addEventListener("click", toggleMenu);
        });
    </script>

</body>

</html>