<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akuntansi Keuangan Lembaga (AKL)</title>
    <link rel="icon" href="{{ asset('images/logo.webp') }}" type="image/png">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    body::-webkit-scrollbar{
      display: none;
    }

    /* Dekorasi lingkaran di belakang (bisa disesuaikan) */
    .hero-decor {
        background-image:
            radial-gradient(circle at 10% 30%, rgba(255, 255, 255, 0.06) 0 120px, transparent 121px),
            radial-gradient(circle at 50% 50%, rgba(255, 255, 255, 0.04) 0 240px, transparent 241px);
    }
</style>
</style>

<body class="bg-white">
    @extends('layouts.app')

    @section('content')

    <!-- ========= section jurusan ========== -->
    <!-- ======= banner ======== -->
    <section class="relative overflow-hidden hero-decor border-b-[20px] border-[#fed700] bg-[#1b2a3b]">
        <div class="max-w-7xl mx-auto px-6 py-10 pt-[20%] md:pt-[5%] md:px-10 flex items-center flex-col-reverse md:flex-row gap-[10px] ">

                <!-- Kiri: teks -->
                <div class="flex items-center text-center md:text-left p-5">
                  <div>
                    <p class="text-white/80 uppercas text-sm mb-4">Welcome to Ademy School</p>
                    <h1 class="text-white font-extrabold leading-tight text-4xl sm:text-4xl md:text-7xl lg:text-7xl">
                        JURUSAN<br class="hidden sm:inline" /> SMK NURUL IMAN
                    </h1>
                    <p class="mt-6 text-white/90 text-sm sm:text-base">
                        Sekolah dengan kurikulum modern dan fasilitas lengkap untuk mendukung perkembangan siswa secara
                        maksimal.
                    </p>

                    <div class="mt-8">
                        <a href="#rpl"
                            class="inline-flex items-center gap-2 border border-white/30 text-white/95 px-4 py-3 rounded-lg hover:bg-white/5 transition">
                            Learn More
                        </a>
                    </div>
                  </div>
                </div>

                <!-- Kanan: gambar -->
                <div class="flex justify-center">
                    <div class="relative">
                        <!-- pengganti background blur/shape -->
                        <div
                            class="absolute -right-8 -top-8 w-[320px] h-[320px] rounded-full bg-white/5 blur-3xl hidden md:block">
                        </div>
                        <!-- gambar utama -->
                        <img src="images/jurusan/herojurus.png" alt="Siswa tersenyum - Hero"
                            class="relative w-full h-[300px] md:h-[600px] md:translate-y-[50px] md:scale-[1.2] object-contain drop-shadow-2xl" />
                    </div>
                </div>

            </div>
        </div>
    </SECTION>
    <!-- ======== end ========== -->

    <!-- ======= section rpl ======== -->
    <section
        class="relative w-full min-h-screen grid grid-cols-1 md:grid-cols-2 overflow-hidden border-b-[20px] border-[#fed700]"
        id="rpl">

        <!-- Bagian Kiri: Foto -->
        <div class="p-6 flex justify-center relative">
            <div
                class="h-[100%] w-[100px] md:w-[200px] border-r-[20px] border-[#fed700] absolute top-[-200px] md:top-[-300px] left-0 rotate-[45deg] md:rotate-[45deg] bg-[#1b2a3b] z-10">
            </div>
            <div
                class="h-[150%] w-[100px] md:w-[180px] absolute top-[-200px] md:top-[-250px] left-[90px] md:left-[90px] rotate-[45deg] bg-[#1b2a3b] z-3">
            </div>
            <img src="{{ asset('images/jurusan/rpl.avif') }}" alt="gedung"
                class="rounded-lg shadow-lg max-h-[100%] w-[400px] object-cover relative z-5">
        </div>

        <!-- Bagian Kanan: Teks -->
        <div class=" p-6 md:pr-[50px] flex flex-col justify-center">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-2">
                PENGEMBANGAN
                PRANGKAT LUNAK
                DAN GIM (PPLG)
            </h2>
            <div class="w-20 h-1 bg-black mb-4"></div>
            <br>
            <p class="text-gray-700 leading-relaxed mb-4">
                Jurusan ini membekali siswa dengan kemampuan merancang, mengembangkan, menguji, dan memelihara perangkat
                lunak yang berkualitas tinggi
                dan memenuhi kebutuhan pengguna.Ketiga jurusan ini dapat membuka peluang karir yang luas di bidang
                keuangan, teknologi informasi, dan industri kreatif.
            </p>
            <p class="text-gray-700 leading-relaxed">
                Buat masa depanmu dengan kode! Di jurusan RPL, kamu akan belajar membangun aplikasi, website, dan sistem
                digital yang digunakan jutaan orang. Cocok untuk kamu yang suka teknologi, logika, dan ingin jadi
                developer handal.
            </p>
        </div>
    </section>
    <!-- ========== end ============== -->

    <!-- ========= section akl ======== -->
    <section
        class="relative w-full min-h-screen flex flex-col-reverse md:grid md:grid-cols-1 md:grid-cols-2 overflow-hidden border-b-[20px] border-[#fed700]"
        id="akl">

        <!-- Bagian Kanan: Teks -->
        <div class=" p-6 md:pl-[50px] flex flex-col justify-center">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-2">
                AKUTANSI
                KEUANGAN
                LEMBAGA (AKL)
            </h2>
            <div class="w-20 h-1 bg-black mb-4"></div>
            <br>
            <p class="text-gray-700 leading-relaxed mb-4">
                Jurusan ini membekali siswa dengan kemampuan mengelola dan menganalisis data keuangan, menyusun laporan
                keuangan, dan membuat keputusan berdasarkan data keuangan.
            </p>
            <p class="text-gray-700 leading-relaxed">
                Siap jadi tulang punggung perusahaan? Jurusan MP membekalimu dengan skill administrasi, komunikasi
                bisnis, dan pengelolaan dokumen profesional. Cocok untuk kamu yang teliti, rapi, dan ingin bekerja di
                dunia perkantoran modern.
            </p>
        </div>

        <!-- Bagian Kiri: Foto -->
        <div class="p-6 flex justify-center relative">
            <div
                class="h-[100%] w-[100px] md:w-[200px] border-l-[20px] border-[#fed700] absolute top-[-200px] md:top-[-300px] right-0 rotate-[-45deg] bg-[#1b2a3b] z-10">
            </div>
            <div
                class="md:h-[150%] h-[160%] w-[100px] md:w-[180px] absolute top-[-240px] md:top-[-250px] right-[100px] md:right-[90px] rotate-[-45deg] bg-[#1b2a3b] z-3">
            </div>
            <img src="{{ asset('images/jurusan/akl.avif') }}" alt="gedung"
                class="rounded-lg shadow-lg max-h-[100%] w-[400px] object-cover relative z-5">
        </div>
    </section>
    <!-- ========== end ========= -->

    <!-- ========= section mp ======== -->
    <section class="relative w-full min-h-screen grid grid-cols-1 md:grid-cols-2 overflow-hidden" id="mp">

        <!-- Bagian Kiri: Foto -->
        <div class="p-6 flex justify-center relative">
           <div
                class="h-[100%] w-[100px] md:w-[200px] border-r-[20px] border-[#fed700] absolute top-[-200px] md:top-[-300px] left-0 rotate-[45deg] md:rotate-[45deg] bg-[#1b2a3b] z-10">
            </div>
            <div
                class="h-[150%] w-[100px] md:w-[180px] absolute top-[-160px] md:top-[-250px] left-[50px] md:left-[90px] rotate-[45deg] bg-[#1b2a3b] z-3">
            </div>
            <img src="{{ asset('images/jurusan/mp.avif') }}" alt="gedung"
                class="rounded-lg shadow-lg max-h-[100%] w-[400px] object-cover relative z-5">
        </div>

        <!-- Bagian Kanan: Teks -->
        <div class=" p-6 md:pr-[50px] flex flex-col justify-center">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-2">
                MANAJEMEN
                PERKANTORAN
                (MP)
            </h2>
            <div class="w-20 h-1 bg-black mb-4"></div>
            <br>
            <p class="text-gray-700 leading-relaxed mb-4">
                Jurusan ini membekali siswa dengan kemampuan mengelola dan menganalisis data keuangan, menyusun laporan
                keuangan, dan membuat keputusan berdasarkan data keuangan.
            </p>
            <p class="text-gray-700 leading-relaxed">
                Angka adalah kekuatanmu! Di jurusan AKL, kamu akan belajar mengelola keuangan, membuat laporan
                akuntansi, dan memahami alur bisnis. Cocok untuk kamu yang detail, logis, dan ingin berkarier di bidang
                keuangan.
            </p>
        </div>
    </section>
    <!-- ======== emd ========= -->
    @endsection

</body>

</html>