<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>
        {{ $post->title }} SMK NURUL IMAN
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter&amp;display=swap" rel="stylesheet" />
    <link rel="icon" href="{{ asset('images/logo.webp') }}" type="image/png">

    <!-- SEO Meta Tags -->
    <meta name="description" content="{{ Str::limit(strip_tags($post->content), 160) }}">
    <meta name="keywords" content="{{ $post->category }}, SMK Nurul Iman, Artikel">
    <meta property="og:title" content="{{ $post->title }} SMK NURUL IMAN">
    <meta property="og:description" content="{{ Str::limit(strip_tags($post->content), 160) }}">
    <meta property="og:image" content="{{ asset('storage/' . $post->cover_image) }}">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $post->title }} SMK NURUL IMAN">
    <meta name="twitter:description" content="{{ Str::limit(strip_tags($post->content), 160) }}">
    <meta name="twitter:image" content="{{ asset('storage/' . $post->cover_image) }}">
    <style>
        body {
            font-family: "Inter", sans-serif;
        }

        /* styling header manual */
        header {
            background: rgba(0, 0, 0, 0.5);
        }
    </style>
</head>

<body>
    @extends('layouts.app')

    @section('content')
    <!-- ========= section detail artikel ======== -->
    <section class="bg-white md:px-10 p-6 max-w-7xl mx-auto pt-[25%] md:pt-[10%]">
        <div class="flex flex-col md:flex-row md:justify-between md:items-start gap-6">
            <!-- <h1 class="text-4xl font-normal max-w-full md:max-w-[50%]">
                Detail article
            </h1> -->
        </div>
        <a href="{{ url()->previous() }}"
            class="flex items-center gap-2 bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 mt-6 mb-4 py-2 rounded-full text-sm w-max">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="flex flex-col gap-3">

                <img alt="Close-up profile side view of a lion with dark green leaves background"
                    class="rounded-xl w-full object-cover" height="400"
                    src="{{ asset('storage/' . $post->cover_image)}}" width="600" />

                <!-- Tombol Share -->
                <!-- Tombol Share dengan Font Awesome -->
                <div class="flex gap-2 mt-2">

                    <span class="text-gray-500 text-sm">Bagikan :</span>

                    <!-- Salin Link -->
                    <button onclick="navigator.clipboard.writeText('{{ url()->current() }}')"
                        class="flex items-center gap-2 bg-gray-700 text-white px-3 py-1 rounded-full text-sm">
                        <i class="fas fa-link"></i>
                    </button>

                    <!-- WhatsApp -->
                    <a href="https://wa.me/?text={{ urlencode($post->title . ' ' . url()->current()) }}" target="_blank"
                        class="flex items-center gap-2 bg-green-500 text-white px-3 py-1 rounded-full text-sm">
                        <i class="fab fa-whatsapp"></i>
                    </a>

                    <!-- Facebook -->
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                        target="_blank"
                        class="flex items-center gap-2 bg-blue-600 text-white px-3 py-1 rounded-full text-sm">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <!-- Instagram -->
                    <a href="https://www.instagram.com/" target="_blank"
                        class="flex items-center gap-2 bg-pink-500 text-white px-3 py-1 rounded-full text-sm">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>


                <h2 class="text-2xl font-normal">
                    {{ $post->title }}
                </h2>

                <div class="break-words w-full text-gray-700">
                    <p>{!! $post->content !!}</p>
                </div>

                <!-- Tanggal Posting -->
                <p class="text-[12px] text-gray-500 font-normal">
                    Diposting pada {{ \Carbon\Carbon::parse($post->created_at)->translatedFormat('d F Y') }}
                </p>

                <button class="border bg-yellow-300 rounded-full px-4 py-1 text-sm w-max" type="button">
                    {{ $post->category }}
                </button>
            </div>


            <!-- ====== card column ========= -->
            <div class="mt-[10px] md:mt-[0px] flex flex-col p-0  rounded-3xl sticky h-[100%] top-[100px]">
                <div class="bg-yellow-400 text-white p-2 rounded-md ">
                    <h1 class="text-[1rem] md:text-[1.5rem] font-bold">Menu list Kategori {{ $post->category }}</h1>
                </div>
                @forelse ($relatedPosts as $index => $related)
                <a class="border-b-2 border-gray-200 px-[5px] py-4" href="{{ route('show-artikel', $related->slug) }}">
                    <div class="flex gap-2 related-item {{ $index >= 3 ? 'hidden' : '' }}">
                        <img alt="Cover image"
                            class="rounded-xl w-[90px] h-[90px] md:w-[150px] md:h-[120px] object-cover flex-shrink-0"
                            src="{{ asset('storage/' . $related->cover_image) }}" width="120" height="120" />
                        <div class="flex flex-col justify-center">
                            <h3
                                class="md:text-sm md:text-xl font-normal leading-snug max-w-[150px] md:max-w-[350px] truncate">
                                {{ $related->title }}
                            </h3>
                            <button
                                class="border border-gray-300 rounded-full p-2 px-2 text-[10px] text-white bg-yellow-400 mt-3 w-max"
                                type="button">
                                {{ $related->category }}
                            </button>
                        </div>
                    </div>
                </a>
                <hr>
                @empty
                <div class="flex flex-col items-center justify-center text-center mt-6">
                    <img src="{{ asset('images/icongagal.png') }}" alt="Berita belum tersedia"
                        class="w-40 h-40 object-contain mb-4">
                    <p class="text-gray-500 text-lg">Maaf, belum ada list yang di tampilkan dari kategori
                        <span>{{ $post->category }}</span>
                    </p>
                    <p>
                    <details>
                        <p>Kenapa ini bisa terjadi karena penulis/admin hanya menulis satu kategori <span>{{
                                $post->category }}</span> syarat tampil di menu list ini admin/penulis harus menulis
                            lebih dari 1 artikel kategori</p>
                    </details>
                    </p>
                </div>
                @endforelse

                @if($relatedPosts->count() > 3)
                <button id="lihatSemuaBtn"
                    class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                    Lihat semuanya
                </button>
                @endif
            </div>
        </div>
    </section>
    <!-- =-======== end ========= -->
    @endsection

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const btn = document.getElementById("lihatSemuaBtn");
            if (btn) {
                btn.addEventListener("click", function () {
                    document.querySelectorAll(".related-item.hidden").forEach(item => {
                        item.classList.remove("hidden");
                    });
                    btn.style.display = "none";
                });
            }
        });
    </script>
</body>

</html>