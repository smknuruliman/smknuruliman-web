<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins&amp;display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css-beranda/beranda.css') }}">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css"
  />

  <!-- SEO TAG -->
  <title>SMK NURUL IMAN | Sekolah Menengah Kejuruan Unggulan & Pendaftaran Online 2026</title>
  <!-- Deskripsi SEO -->
  <meta name="description"
    content="SMK Nurul Iman adalah sekolah menengah kejuruan unggulan dengan jurusan Rekaya Perangkat Lunak, Manajemen Perkantoran dan Akuntansi Keuangan Lembaga, Daftar SPMB 2026 secara online dengan mudah.">
  <!-- Kata Kunci SEO -->
  <meta name="keywords"
    content="SMK Nurul Iman, Sekolah Menengah Kejuruan, Pendaftaran SMK, SMK terbaik, SMK swasta, SPMB 2026, Rekaya Perangkat Lunak, Perkantoran, Akuntansi Keuangan Lembaga, sekolah unggulan, sekolah kejuruan, daftar sekolah menengah, SMK jakarta timur">
  <meta name="author" content="SMK Nurul Iman">
  <!-- Open Graph (Facebook, WhatsApp, LinkedIn) -->
  <meta property="og:title" content="SMK Nurul Iman | Pendaftaran Online SPMB 2026">
  <meta property="og:description"
    content="SMK Nurul Iman membuka pendaftaran SPMB 2026. Pilih jurusan favoritmu dan raih masa depan gemilang bersama sekolah unggulan.">
  <meta property="og:image" content="{{ asset('images/pp1.webp') }}">
  <meta property="og:url" content="https://smknuruliman.sch.id">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="id_ID">
  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="SMK Nurul Iman | Pendaftaran Online SPMB 2026">
  <meta name="twitter:description"
    content="Daftar online SPMB 2026 SMK Nurul Iman. Jurusan unggulan: TI, Manajemen, Akuntansi, DKV.">
  <meta name="twitter:image" content="{{ asset('images/pp1.webp') }}">

  <!-- Canonical (hindari duplikat URL) -->
<link rel="canonical" href="https://smknuruliman.sch.id">

  <!-- Favicon -->
  <link rel="icon" href="{{ asset('images/logo.webp') }}" type="image/png">
</head>
  @if(session('pengembangan'))
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      Swal.fire({
        title: 'Info!',
        text: "{{ session('pengembangan') }}",
        icon: 'info',
        confirmButtonColor: '#4F46E5', // warna indigo
        confirmButtonText: 'OK'
      });
    });
  </script>
@endif
<style>
  /* ==== hero section bg-animatsiii -> sengaja di taru di sini alesan nya tanya derisdev ==== */
  .bg-slideshow {
    position: relative;
    overflow: hidden;
  }

  /* Tambahkan 4 layer untuk tiap gambar */
  .bg-slideshow::before,
  .bg-slideshow::after,
  .bg-slideshow .bg2,
  .bg-slideshow .bg3 {
    content: "";
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    opacity: 0;
    animation: fadeSlide 17s infinite;
    z-index: 0;
    transition: opacity 1.5s ease-in-out;
  }

  /* Gambar pertama (default background) */
  .bg-slideshow::before {
    background-image: url('{{ asset('images/hero.avif') }}');
    animation-delay: 1s;
    opacity: 1;
  }

  /* Gambar kedua */
  .bg-slideshow::after {
    background-image: url('{{ asset('images/pp1.webp') }}');
    animation-delay: 3.5s;
  }

  /* Gambar ketiga */
  .bg-slideshow .bg2 {
    background-image: url('{{ asset('images/pp2.webp') }}');
    animation-delay: 7s;
  }

  /* Gambar keempat */
  .bg-slideshow .bg3 {
    background-image: url('{{ asset('images/pp3.webp') }}');
    animation-delay: 10s;
  }

  /* Animasi fade */
  @keyframes fadeSlide {
    0% {
      opacity: 0;
    }

    5% {
      opacity: 1;
    }

    25% {
      opacity: 1;
    }

    30% {
      opacity: 0;
    }

    100% {
      opacity: 0;
    }
  }

  /* Overlay hitam transparan tetap sama */
  .bg-slideshow .overlay {
    position: absolute;
    inset: 0;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1;
  }

  /* Konten di atas slideshow */
  .bg-slideshow>.relative {
    position: relative;
    z-index: 2;
  }
  /* ======== end ======= */
</style>
<body class="font-sans">
  @if(session('success'))
  <script>
    Swal.fire({
      icon: 'success',
      title: 'Berhasil!',
      text: '{{ session('success') }}',
      showConfirmButton: false,
      timer: 3500
    });
  </script>
  @endif
  @extends('layouts.app')

  @section('content')
  <!-- ====== Hero Section ======== -->
  <section id="Beranda"
    class="bg-slideshow relative py-[20%] md:py-[30%] md:h-screen bg-cover bg-center flex items-center"
    style="background-image: url('{{ asset('images/hero.avif') }}');">

    <!-- Layer tambahan untuk fade animasi -->
    <div class="bg2"></div>
    <div class="bg3"></div>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/50 overlay"></div>

    <!-- Content -->
    <div class="relative z-10 py-[13%] max-w-4xl px-5 md:px-10 mt-5 text-white">
      <h3 class="text-xl font-semibold"  data-aos="fade-down" data-aos-duration="1000">SMK NURUL IMAN</h3>
      <h1  data-aos="fade-right" data-aos-duration="1000" class="text-[3rem] md:text-[5rem] leading-[1.2] font-extrabold mt-2">
        BELAJAR <span class="text-[#fed700]">NYATA</span><br>
        <span class="text-[#fed700]">KARYA</span> NYATA
      </h1>
      <p  data-aos="fade-up" data-aos-duration="1000" class="mt-4 text-[12px] md:text-[17px] text-gray-200 max-w-2xl">
        Jl. Pisangan Baru Timur No.4A, RT.4/RW.9, Pisangan Baru, Kec. Matraman, Kota Jakarta Timur, Daerah
        Khusus Ibukota Jakarta 13110
      </p>
      <a href="#about"
        class="inline-block px-[15px] text-[14px] md:text-[20px] mt-6 md:px-12 py-2 border border-white rounded-lg hover:bg-yellow-400 hover:text-gray-900 transition">
        Lihat Selengkapnya
      </a>
    </div>
  </section>
  <!-- ====== End Hero Section ======== -->

  <!-- ======= Statistik Section ======= -->
  <section
    class="rounded-t-[20px] md:rounded-t-[0px] mt-[-20px] relative bg-white z-20 flex justify-center md:justify-end">
    <div
      class="min-w-[100%] md:min-w-[0px] md:max-w-4xl mt-[-35px] md:mt-[-80px] grid grid-cols-4 gap-2 md:gap-6 px-6 md:px-6">
      <!-- Box 1 -->
      <div class="bg-white border-2 border-black border-solid text-center p-[4px] md:p-5 rounded-lg shadow-lg">
        <h2 class="text-[23px] md:text-[3rem] font-bold">35+</h2>
        <p class="mt-[1px] md:mt-[-10px] text-green-500 text-[10px] md:text-[2rem] font-bold font-semibold">
          YEARS</p>
      </div>
      <!-- Box 2 -->
      <div class="bg-white border-2 border-black border-solid text-center p-[4px] md:p-5 rounded-lg shadow-lg">
        <h2 class="text-[23px] md:text-[3rem] font-bold">{{ $countGuru}}+</h2>
        <p class="mt-[1px] md:mt-[-10px] text-green-500 text-[10px] md:text-[2rem] font-bold font-semibold">
          TEACHER</p>
      </div>
      <!-- Box 3 -->
      <div class="bg-white border-2 border-black border-solid text-center p-[4px] md:p-5 rounded-lg shadow-lg">
        <h2 class="text-[20px] md:text-[3rem] font-bold">200</h2>
        <p class="mt-[1px] md:mt-[-10px] text-green-500 text-[10px] md:text-[2rem] font-bold font-semibold">
          STUDENT</p>
      </div>
      <!-- Box 4 -->
      <div class="bg-white border-2 border-black border-solid text-center p-[4px] md:p-5 rounded-lg shadow-lg">
        <h2 class="text-[23px] md:text-[3rem] font-bold">{{ $countStaff }}+</h2>
        <p class="mt-[1px] md:mt-[-10px] text-green-500 text-[10px] md:text-[2rem] font-bold font-semibold">
          STAFF</p>
      </div>
    </div>
  </section>
  <!-- ======= End Statistik Section ======= -->

  <!-- ===== about section ====== -->
  <section class="py-6 md:py-16 mt-4 px-6 bg-white md:px-10" id="about" data-aos="fade-up" data-aos-duration="1000">
    <div class="mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

      <!-- Kolom Kiri (Gambar) -->
      <div class="grid grid-cols-2 gap-4">
        <div class="space-y-4">
          @forelse ($profile as $img)
          <img src="{{ asset('storage/' . $img->profile_img1) }}" loading="lazy" alt="SMK NURUL IMAN"
            class="rounded-lg shadow-lg object-cover w-full h-[180px] md:h-[220px]">
          @empty
          <img src="{{ asset('images/pp3.jpg') }}" loading="lazy" alt="SMK NURUL IMAN"
            class="rounded-lg shadow-lg object-cover w-full h-[180px] md:h-[220px]">
          @endforelse
          @forelse ($profile as $img)
          <img src="{{ asset('storage/' . $img->profile_img2) }}" loading="lazy" alt="SMK NURUL IMAN"
            class="rounded-lg shadow-lg object-cover w-full h-[180px] md:h-[220px]">
          @empty
          <img src="{{ asset('images/pp3.jpg') }}" loading="lazy" alt="SMK NURUL IMAN"
            class="rounded-lg shadow-lg object-cover w-full h-[180px] md:h-[220px]">
          @endforelse
        </div>
        <div>
          @forelse ($profile as $img)
          <img src="{{ asset('storage/' . $img->profile_img3) }}" loading="lazy" alt="SMK NURUL IMAN"
            class="rounded-lg shadow-lg object-cover w-full h-full">
          @empty
          <img src="{{ asset('images/pp3.jpg') }}" loading="lazy" alt="SMK NURUL IMAN"
            class="rounded-lg shadow-lg object-cover w-full h-[180px] md:h-[220px]">
          @endforelse
        </div>
      </div>

      <!-- Kolom Kanan (Teks) -->
      <div class="space-y-6">
        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900">
          PROFIL <br> SMK NURUL IMAN
        </h2>
        @foreach ($profile as $desc)
        <p class="text-gray-600 leading-relaxed">
          {!! $desc->profile_desc !!}
          <a href="/profile-sekolah#sejarah" class="text-unuder"><u>Lihat selengkapnya</u></a>
        </p>
        @endforeach

        <!-- List Item -->
        <div class="space-y-4">
          <!-- Item 1 -->
          <div class="flex items-center space-x-4 bg-[#fed700] text-black rounded-lg p-4 shadow-md">
            <div class="bg-white font-bold px-4 py-2 rounded-md text-lg">VISI</div>
              <p class="text-sm md:text-base">Menghasilkan peserta didik yang kompeten, berkualitas,
              berprestasi, sesuai
              dengan bidang keilmuan dan keahlian</p>
          </div>
          <!-- Item 2 -->
          <div class="flex items-center space-x-4 bg-[#fed700] text-black rounded-lg p-4 shadow-md">
            <div class="bg-white font-bold px-4 py-2 rounded-md text-lg">MISI</div>
            <p class="text-sm md:text-base">terciptanya iman yang bertaqwa cerdas dan berkarakter serta
              berdaya saing
              global</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===== end about section ====== -->

  <!-- ======== section info section ====== -->
  <section class="bg-white mx-auto px-6 md:px-10 py-6 md:pt-7 pb-10  bg-cover bg-center bg-scroll md:bg-fixed"
    id="berita"
    style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset('images/pp1.webp') }}');">
    <div data-aos="fade-up" data-aos-duration="1000"><!-- bungkusan buat animasi -->
      <h2 class="text-white text-center md:text-left text-3xl md:text-5xl font-extrabold mb-5">ARTIKEL & BERITA
      </h2>
      <p class="text-white text-center md:text-left mb-4">Seputar Artikel dan Pengumuman Smk Nurul Iman</p>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-2 items-stretch">

        <!-- Kolom Kegiatan -->
        <div class="flex flex-col h-full gap-4 md:gap-2">
          <!-- Card 1 -->
          @foreach ($card1 as $artikel)
          <div
            class="relative shadow rounded-lg overflow-hidden flex-shrink-0 w-full snap-start md:w-auto flex flex-col">
            <a href="{{ route('show-artikel', $artikel->slug) }}">
              <img loading="lazy" src="{{ asset('storage/' . $artikel->cover_image) }}" alt="Prestasi"
                class="w-full h-48 object-cover">
              <!-- bayangan item di gambar nye -->
              <div class="absolute inset-0 bg-black bg-opacity-30 z-10"></div>
              <!-- bungkusan text -->
              <div class="text-white p-4 flex-1 flex flex-col absolute bottom-0 z-20">
                <div class="space-x-2">
                  <span class="inline-block bg-yellow-500 text-white text-xs px-2 py-1 rounded">{{
                    $artikel->category }}</span>
                </div>
                <h3 class="text-lg font-semibold">{{ $artikel->title }}</h3>
                <p class="text-sm text-white mt-auto">{{
                  $artikel->created_at->translatedFormat('j F Y') }}</p>
              </div>
            </a>
          </div>
          @endforeach

          <!-- Card 2 -->
          @foreach ($card2 as $artikel)
          <div
            class="relative shadow rounded-lg overflow-hidden flex-shrink-0 w-full snap-start md:w-auto flex flex-col">
            <a href="{{ route('show-artikel', $artikel->slug) }}">
              <img loading="lazy" src="{{ asset('storage/' . $artikel->cover_image) }}" alt="Kegiatan"
                class="w-full h-48 object-cover">
              <!-- bayangan item di gambar nye -->
              <div class="absolute inset-0 bg-black bg-opacity-50 z-10"></div>
              <!-- bungkusan text -->
              <div class="text-white p-4 flex-1 flex flex-col absolute bottom-0 bg-opacity-90 z-20">
                <div class="space-x-2">
                  <span class="inline-block bg-yellow-500 text-white text-xs px-2 py-1 rounded">{{
                    $artikel->category }}</span>
                </div>
                <h3 class="text-lg font-semibold">{{ $artikel->title }}</h3>
                <p class="text-sm text-white mt-auto">{{
                  $artikel->created_at->translatedFormat('j F Y') }}</p>
              </div>
            </a>
          </div>
          @endforeach
        </div>

        <!-- Kolom Pengumuman spmb -->
        @foreach ($card3 as $artikel)
        <a href="{{ route('show-artikel', $artikel->slug) }}">
          <div class="flex flex-col h-[180px] md:h-[392px] space-y-4">
            <div class="bg-white shadow rounded-lg overflow-hidden relative flex-1 flex flex-col">
              <img src="{{ asset('storage/' . $artikel->cover_image) }}" alt="SPMB 2027"
                class="w-full h-full object-cover">
              <!-- bayangan item di gambar nye -->
              <div class="absolute inset-0 bg-black bg-opacity-30 z-10"></div>
              <!-- bungkusan text -->
              <div class="p-4 flex-1 text-white flex flex-col absolute bottom-0 bg-opacity-90 z-20">
                <div class="space-x-2">
                  <span class="inline-block bg-yellow-500 text-white text-xs px-2 py-1 rounded">{{
                    $artikel->category }}</span>
                </div>
                <h3 class="mt-2 text-[15px] md:text-lg font-semibold">{{ $artikel->title }}</h3>
                <p class="text-sm text-white mt-auto">{{ $artikel->created_at->translatedFormat('j F Y')
                  }}</p>
              </div>
            </div>
          </div>
        </a>
        @endforeach

        <!-- Kolom Update Terkini -->
        @foreach ($card4 as $artikel)
        <a href="{{ route('show-artikel', $artikel->slug) }}">
          <div class="flex flex-colh h-[180px] md:h-[392px] space-y-4">
            <div class="bg-white shadow rounded-lg overflow-hidden relative flex-1 flex flex-col">
              <img src="{{ asset('storage/' . $artikel->cover_image) }}" alt="Umum" class="w-full h-full object-cover">
              <!-- bayangan item di gambar nye -->
              <div class="absolute inset-0 bg-black bg-opacity-30 z-10"></div>
              <!-- bungkusan text -->
              <div class="p-4 flex-1 text-white flex flex-col absolute bottom-0 bg-opacity-90 z-20">
                <div class="space-x-2">
                  <span class="inline-block bg-yellow-500 text-white text-xs px-2 py-1 rounded">{{
                    $artikel->category }}</span>
                </div>
                <h3 class="mt-2 text-[15px] md:text-lg font-semibold">{{ $artikel->title }}</h3>
                <p class="text-sm text-white mt-auto">{{ $artikel->created_at->translatedFormat('j F Y')
                  }}</p>
              </div>
            </div>
          </div>
        </a>
        @endforeach

      </div>
    </div>
  </section>
  <br>
  <!-- ======= section info end ========= -->

  <!-- ======== eskul section ========= -->
  <section class="bg-white text-white md:px-4 mx:pt-[25px] pb-6" id="eskul">
    <div class="">
    <h2 class="text-3xl md:text-4xl font-extrabold font-bold text-black text-center mb-10">EKSTRAKULIKULER</h2>
    </div>

    <div class="relative">
      <!-- Tombol kiri -->
      <button id="prevBtn"
        class="absolute left-4 top-1/2 mx:ml-[4px] -translate-y-1/2 z-10 bg-black/50 hover:bg-black px-3 py-2 rounded-full">
        <i class="ph ph-caret-left"></i>
      </button>

      <!-- Wrapper Carousel -->
      <div id="carousel" class="flex px-4 overflow-auto md:overflow-hidden scroll-smooth">
        <!-- Card -->
        @forelse ($eskul as $post)
        <div
          class="min-w-[250px] max-w-[250px] relative flex-shrink-0 mx-2 bg-[black] rounded-xl overflow-hidden shadow-lg">
          <img src="{{ asset('storage/' . $post->gambar) }}" alt="Cocetta" class="w-full h-60 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold">{{ $post->title }}</h3>
            <p class="text-sm text-gray-400">{{ $post->desc }}</p>
            <div class="flex justify-between items-center mt-4 text-sm">
              <span class="bg-[white] text-black px-2 py-1 rounded-full">Top Eskul</span>
              <span class="text-gray-300">Join {{ $post->joinCount }}</span>
            </div>
          </div>
        </div>
         @empty
           <h1>eskul belum di upload</h1>
         @endforelse
      </div>

      <!-- Tombol kanan -->
      <button id="nextBtn"
        class="absolute right-4 top-1/2 mx:mr-[4px] -translate-y-1/2 z-10 bg-black/50 hover:bg-black px-3 py-2 rounded-full">
        <i class="ph ph-caret-right"></i>
      </button>
    </div>
  </section>
  <!-- ======= end eskul section ======== -->

  <!-- ======== section jurusan ======= -->
  <section class="py-10  md:pb-10 px-6 md:px-12 bg-cover bg-scroll md:bg-fixed" id="jurusan"
    style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset('images/pp1.webp') }}');">
    <div data-aos="fade-up" data-aos-duration="1000"><!-- bungkusan buat animasi -->
      <div class="relative z-10 max-w-7xl mx-auto text-center text-white">
        <h2 class="text-3xl md:text-4xl font-extrabold mb-12">JURUSAN</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Card 1 -->
          <div
            class="text-gray-900 rounded-lg hover:scale-105 transition-transform duration-500 relative group text-left">
            <a href="/jurusan#rpl">
              <span
                class="absolute text-[25px]  border-[3px] border-white border-solid top-[-6px] left-[-6px] bg-[rgba(0,0,0,0.5)] text-[#fed700] font-bold px-3 py-1 rounded-md">
                PPLG
              </span>
              <img src="{{ asset('images/jurusan/rpl.avif') }}" loading="lazy" alt="PPLG"
                class="w-full h-80 bg-end bg-contain object-cover rounded-tr-[50px] border-4 border-white border-solid">
              <div class="p-2">
                <h3 class="text-lg text-white font-bold uppercase">Pemrograman Prangkat Lunak dan Gim
                </h3>
              </div>
            </a>
          </div>

          <!-- Card 2 -->
          <div
            class="text-gray-900 rounded-lg hover:scale-105 transition-transform duration-500 relative group text-left">
            <a href="/jurusan#akl">
              <span
                class="absolute text-[25px]  border-[3px] border-white border-solid top-[-6px] left-[-6px] bg-[rgba(0,0,0,0.5)] text-[#fed700] font-bold px-3 py-1 rounded-md">
                AKL
              </span>
              <img src="{{ asset('images/jurusan/akl.avif') }}" loading="lazy" alt="AKL"
                class="w-full h-80 bg-end bg-contain object-cover  rounded-bl-[50px] border-4 border-white border-solid">
              <div class="p-2">
                <h3 class="text-lg text-white font-bold uppercase">Akutansi Keuangan Lembaga</h3>
              </div>
            </a>
          </div>

          <!-- Card 3 -->
          <div
            class="text-gray-900 rounded-lg hover:scale-105 transition-transform duration-500 relative group text-left">
            <a href="/jurusan#mp ">
              <span
                class="absolute text-[25px] border-[3px] border-white border-solid top-[-6px] left-[-6px] bg-[rgba(0,0,0,0.5)] text-[#fed700] font-bold px-3 py-1 rounded-md">
                MP
              </span>
              <img src="{{ asset('images/jurusan/mp.avif') }}" loading="lazy" alt="MP"
                class="w-full h-80 bg-end bg-contain object-cover  rounded-tr-[50px] border-4 border-white border-solid">
              <div class="p-2">
                <h3 class="text-lg text-white font-bold uppercase">Manajemen Perkantoran</h3>
              </div>
            </a>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- ======== end section jurusan ======= -->

  <!-- ========= section prestasi ======= -->
  <section class="bg-white py-10 md:pt-8 md:pb-10 px-6 md:px-12 bg-cover bg-scroll md:bg-fixed" id="prestasi">
    <main class="mx-auto">
      <!-- Header -->
      <header class="mb-6 md:mb-10 md:flex justify-between">
        <div>
          <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight">PRESTASI</h1>
        </div>
        <div class="md:max-w-[500px]">
          <p class="mt-2 text-slate-500">Prestasi nyata dari kerja keras dan kreativitas siswa — bukti bahwa bakat diasah, karakter dibentuk, dan masa depan diraih.</p>
        </div>
      </header>

      <!-- Grid kartu -->
      <section>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          <!-- Card 1 -->
          @foreach ($prestasi as $post)
          <article class="bg-white rounded-2xl shadow-md overflow-hidden">
            <div class="relative h-56 sm:h-60 md:h-64">
              @if ($prestasi && $post->gambar)
                 <img src="{{ asset('storage/' . $post->gambar) }}" alt="SC. Mindanou" class="w-full h-full object-cover">
              @else
                <img src="https://png.pngtree.com/thumb_back/fw800/background/20220730/pngtree-bicolor-icon-set-guarantee-and-competition-success-icon-photo-image_19315762.jpg" alt="" class="w-full h-full object-cover">
              @endif
             
              <div
                class="absolute top-3 right-3 bg-white/90 text-slate-700 rounded-full px-3 py-1 text-sm font-medium badge-sm shadow">
                30 jun 2024
              </div>
            </div>
            <div class="p-4">
              <h3 class="text-base sm:text-lg font-semibold text-slate-800">{{ $post->title }}</h3>
              <p class="mt-2 text-sm text-slate-500 flex items-center gap-2">
                <!-- simple location icon -->
                <svg class="w-4 h-4 text-sky-500 flex-shrink-0" viewBox="0 0 24 24" fill="none">
                  <path d="M12 11.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" stroke="currentColor" stroke-width="1.2"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M19 11.5C19 16.5 12 21 12 21s-7-4.5-7-9.5a7 7 0 1 1 14 0z" stroke="currentColor"
                    stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                {{ $post->deskripsi }}
              </p>
            </div>
          </article>
          @endforeach
        </div>
      </section>
    </main>
  </section>
  <!-- ========= section prestasi ========= -->

  <!-- ========= Kotak Saran Section ========== -->
  <!-- tahap pengembangan  -->
  <!-- ======= End Contact Section ========== -->
  @endsection

  <script> // js ini sengaja di taruh di internal file karena kalau di taruh di file js nya itu bakal error di code nya !!
    document.addEventListener('DOMContentLoaded', () => {
      const carousel = document.getElementById('carousel');
      const nextBtn = document.getElementById('nextBtn');
      const prevBtn = document.getElementById('prevBtn');

      const cardWidth = 250 + 16;

      nextBtn.addEventListener('click', () => {
        carousel.scrollBy({ left: cardWidth, behavior: 'smooth' });
      });

      prevBtn.addEventListener('click', () => {
        carousel.scrollBy({ left: -cardWidth, behavior: 'smooth' });
      });
    });

  </script>

  <script src="{{ asset('js-beranda/beranda.js') }}"></script>

  <!-- library animasi per section make AOS  -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>