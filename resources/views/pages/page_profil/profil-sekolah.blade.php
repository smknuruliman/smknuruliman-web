<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Sekolah | Smk Nurul Iman</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&amp;display=swap" rel="stylesheet" />
    <link rel="icon" href="{{ asset('images/logo.webp') }}" type="image/png">
</head>
<style>
    body::-webkit-scrollbar{
        display: none;
    }
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }

      /* Dekorasi lingkaran di belakang (bisa disesuaikan) */
    .hero-decor {
        background-image:
            radial-gradient(circle at 10% 30%, rgba(255, 255, 255, 0.06) 0 120px, transparent 121px),
            radial-gradient(circle at 50% 50%, rgba(255, 255, 255, 0.04) 0 240px, transparent 241px);
    }

    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>

<body>
    @extends('layouts.app')

    @section('content')
   <!-- ======= banner headerr ======== -->
    <section class="relative overflow-hidden hero-decor bg-[#1b2a3b] flex items-center">
        <div class="max-w-7xl mx-auto px-6 py-10 pt-[30%] md:pt-[5%] md:px-10 flex items-center flex-wrap-reverse md:flex-nowrap gap-[30px] ">

                <!-- Kiri: teks -->
                <div class="flex items-center text-center md:text-left p-5">
                  <div>
                    <h1 class="text-white font-extrabold leading-tight text-3xl sm:text-4xl md:text-7xl lg:text-7xl">
                        PROFIL<br class="hidden sm:inline" /> SMK NURUL IMAN
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
                        <img src="images/pp-sekolah.png" alt="Siswa tersenyum - Hero"
                            class="relative w-full h-auto md:h-[600px] object-contain drop-shadow-2xl" />
                    </div>
                </div>

            </div>
        </div>
    </SECTION>
    <!-- ======== end ========== -->
    
    <!-- ========  sction visi misi ======== -->
    <section class="max-w-7xl mx-auto px-6 md:px-10 py-12" id="vimi">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- Box 1: Deskripsi -->
            <div class="bg-white rounded-lg p-6 shadow-md border border-gray-200">
                <h2 class="text-3xl font-bold mb-4 text-gray-800">Tentang Visi & Misi</h2>
                <p class="text-gray-600 leading-relaxed">
                    Visi dan misi sekolah ini menjadi landasan utama dalam mengembangkan peserta didik yang tidak hanya
                    cerdas secara intelektual,
                    tetapi juga memiliki karakter, keterampilan, dan daya saing di tingkat nasional maupun global.
                </p>
            </div>

            <!-- Box 2: Visi -->
            <div class="bg-red-700 text-white rounded-lg p-6 shadow-md">
                <h2 class="text-2xl font-bold mb-4">Visi</h2>
                <p class="leading-relaxed">
                    terciptanya iman yang bertaqwa cerdas dan berkarakter serta berdaya saing global
            </div>
            <div class="bg-gray-100 rounded-lg p-6 shadow-md">
                <h2 class="text-2xl font-bold mb-4 text-gray-800">Misi</h2>
                <ul class="list-disc pl-5 space-y-2 text-gray-700">
                    <!-- 2 misi pertama selalu tampil -->
                    <li>Memperteguh keimanan dan ketaqwaan terhadap Allah Subhanallah Wataala.</li>
                    <li>Menghasilkan karakter pribadi yang memiliki kesadaran diri dalam mewujudkan kejujuran, keadilan,
                        kedisiplinan, tanggung jawab, kepedulian, responsive, dan santun dalam berprilaku.</li>

                    <!-- Misi lainnya disembunyikan dulu -->
                    <li class="hidden extra-misi">Membekali peserta didik dengan ilmu dan pengetahuan, teknologi,
                        komunikasi, dan keterampilan agar mampu bersaing dalam era milenial.</li>
                    <li class="hidden extra-misi">Menghasilkan peserta didik yang kompeten, berkualitas, berprestasi,
                        sesuai dengan bidang keilmuan dan keahlian.</li>
                    <li class="hidden extra-misi">Menghasilkan entrepeneurship yang berdaya guna dan berdaya saing
                        ditingkat lokal dan nasional.</li>
                </ul>

                <!-- Tombol Lihat Semua -->
                <!-- <button id="toggleMisi" class="mt-4 px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 transition">
        Lihat Semua
      </button> -->
            </div>
        </div>
    </section>
    <!-- ========= end ======= -->

    <!-- ======= Section Guru & Tendik ======= -->
    <div class="relative w-full overflow-hidden py-10 px-6 md:px-10" data-aos="fade-up" data-aos-delay="300"
        data-aos-duration="3000" id="guru">
        <h1 class="text-3xl md:text-4xl font-bold flex items-center gap-2 mb-8 text-gray-900">
            <span class="text-yellow-500">|</span> Guru & Tendik
        </h1>

        <!-- Tombol kiri -->
        <button onclick="slideGuru(-1)"
            class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-white rounded-full w-10 h-10 shadow-md flex items-center justify-center hover:bg-yellow-500 hover:text-white transition">
            &#10094;
        </button>

        <!-- Container scroll -->
        <div id="guruContainer" class="flex gap-5 overflow-x-auto scroll-smooth scrollbar-hide">
            <!-- Card Guru -->
             @foreach ($guru as $post)
             <div class="flex-shrink-0 w-64 bg-white rounded-xl shadow-3xl hover:shadow-lg transition p-2">
                <img src="{{ asset('storage/' . $post->image) }}"
                    alt="Wiwit Yulian Ismail" class="w-full h-72 object-cover rounded-[40px] rounded-bl-[0px]">
                <div class="p-4 text-center">
                    <h3 class="text-lg font-semibold text-gray-800">{{ $post->name }}</h3>
                    <p class="text-yellow-500 text-sm">{{ $post->title }}</p>
                </div>
            </div>
             @endforeach

        </div>

        <!-- Tombol kanan -->
        <button onclick="slideGuru(1)"
            class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-white rounded-full w-10 h-10 shadow-md flex items-center justify-center hover:bg-yellow-500 hover:text-white transition">
            &#10095;
        </button>
    </div>
    <!-- ======= section guru ======== -->
    
      <!-- =========== sambutan kepsek ============ -->
    <section class="bg-cover bg-center" id="sambutan"
        style="background-attachment: fixed; background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset('images/pp1.webp') }}');">
        <div
            class="max-w-7xl mx-auto px-6 md:px-10 py-12 flex flex-col-reverse md:grid md:grid-cols-2 gap-6 items-center">

            <!-- Kiri: Text -->
            <div class="space-y-5 md:text-left">
                <h3 class="text-2xl md:text-4xl text-gray-300 uppercase tracking-wide">Prakata Kepala Sekolah</h3>
                <h1 class="text-3xl md:text-7xl text-white font-bold">
                    SMK <span class="text-yellow-400">NURUL IMAN</span>
                </h1>
                <p class="text-lg md:text-2xl text-gray-300 leading-relaxed">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit. Consectetur adipiscing elit
                    quisque faucibus ex sapien vitae. Ex sapien vitae pellentesque sem placerat in id.
                </p>
                <button
                    class="text-[18px] px-10 py-2 border border-yellow-400 text-yellow-400 rounded-md hover:bg-yellow-400 hover:text-gray-900 transition">
                    Bapak Ero Rohada M.M
                </button>
            </div>

            <!-- Kanan: Gambar -->
            <div class="flex justify-center md:justify-end mb-6 md:mb-0">
                <img src="https://udeanleak.github.io/webkolah/aset/paero.png" alt="Gedung Sekolah"
                    class="rounded-xl shadow-lg h-[350px] md:h-[500px] w-full max-w-md object-cover">
            </div>
        </div>
    </section>
    <!-- ======== end =========== -->  


    <!-- ========= section fasilitas =========== -->
    <section class="max-w-7xl mx-auto px-6 md:px-10 py-8" id="fasilitas">
        <div class="flex items-center justify-between mb-8">
            <h2 class="text-3xl font-bold text-gray-800">Fasilitas Sekolah</h2>
        </div>

        <!-- Grid Card -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- Card 1 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                <img src="{{ asset('images/fasilitas/gedung.jpg') }}" alt="Perpustakaan"
                    class="w-full h-48 object-cover">
                <div class="p-5">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Gedung Sekolah</h3>
                    <p class="text-gray-600 text-sm">
                       Gedung dengan lantai 3 
                    </p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                <img src="{{ asset('images/fasilitas/lab komputer.JPG') }}" alt="Laboratorium"
                    class="w-full h-48 object-cover">
                <div class="p-5">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Laboratorium</h3>
                    <p class="text-gray-600 text-sm">
                        Laboratorium sains dan komputer dengan fasilitas modern.
                    </p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                <img src="{{ asset('images/fasilitas/halte.jpg') }}" alt="Aula" class="w-full h-48 object-cover">
                <div class="p-5">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Halte</h3>
                    <p class="text-gray-600 text-sm">
                        Akses halte jaklinko, 04, M-35, Bus sekolah
                    </p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                <img src="https://source.unsplash.com/400x250/?stadium" alt="Lapangan" class="w-full h-48 object-cover">
                <div class="p-5">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Lapangan</h3>
                    <p class="text-gray-600 text-sm">
                        Lapangan olahraga untuk mendukung aktivitas fisik dan ekstrakurikuler.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                <img src="{{ asset('images/fasilitas/masjid.JPG') }}" alt="masjid smk nurul iman" class="w-full h-48 object-cover">
                <div class="p-5">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Masjid</h3>
                    <p class="text-gray-600 text-sm">
                           Masjid sekolah yang nyaman dan bersih, digunakan untuk kegiatan ibadah, pembinaan karakter, serta kegiatan keagamaan siswa dan guru.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                <img src="{{ asset('images/fasilitas/ruang kelas.JPG') }}" alt="Runag kelas smk nurul iman" class="w-full h-48 object-cover">
                <div class="p-5">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Ruang kelas</h3>
                    <p class="text-gray-600 text-sm">
                         Ruang kelas dilengkapi dengan pendingin udara (AC) untuk menciptakan suasana belajar yang nyaman dan kondusif bagi siswa.
                    </p>
                </div>
            </div>

        </div>
    </section>
    <!-- ========= end ======== -->

    <!-- ======== sejarah section ======== -->
    <section
        class="max-w-7xl mx-auto px-6 md:px-10 py-12 md:grid md:grid-cols-2 gap-6 md:gap-10 items-center"
        id="sejarah">

        <!-- Kanan: Gambar -->
        <div class="flex justify-center md:justify-end">
            <div
                class=" w-[150px] h-[150px] md:w-80 md:h-80 mt-[50px] flex items-center justify-center overflow-hidden">
                <img src="{{ asset('images/pp3.jpg') }}" alt="About us photo"
                    class="w-56 h-56 md:w-72 md:h-72 object-cover">
            </div>
            <div
                class=" w-[150px] h-[150px] md:w-80 md:h-80 mb-[-50px] flex items-center justify-center overflow-hidden">
                <img src="{{ asset('images/pp1.webp') }}" alt="About us photo"
                    class="w-56 h-56 md:w-72 md:h-72 object-cover">
            </div>
        </div>
        
        <!-- Kiri: Teks -->
        <div class="space-y-6 mt-10 md:mt-0">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Sejarah Smk Nurul Iman</h2>
            <p class="text-gray-600 leading-relaxed">
                SMK Nurul Iman didirikan pada Tahun 1989 dengan 2 jurusan, Berupa jurusan Akutansi dan Ketatausahaan
                lalu berkembang menjadi sekertaris.
            </p>
            <p class="text-gray-600 leading-relaxed">
                Dengan jumlah siswa sekitar 120 siswa/i dengan SK izin operasional:0002/PK.01.04 Tanggal SK
                pendirian:2012-08-29 Status Kepemilikan
                SMK Nurul Iman: Yayasan SMK Nurul Iman dimiliki oleh: Yayasan Amal Ummat Islam Dengan kepala sekolah:
                Drs. Sul Chusosi Wakilkurikulum: Drs. Ero rohada Meluluskan siswa pertama kali pada:1992
            </p>
        </div>
    </section>
    <!-- ========= end ========= -->
     @endsection

    <script src="{{ asset('js-ProfileSekolah/pp.js') }}"></script>
</body>

</html>