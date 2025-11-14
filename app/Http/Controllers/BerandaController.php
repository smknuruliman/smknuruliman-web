<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Eskul;
use App\Models\Saran;
use App\Models\Staff;
use App\Models\Article;
use App\Models\beranda;
use App\Models\Profile;
use App\Models\Teacher;
use App\Models\Prestasi;
use App\Models\homepages;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    
    //CMS perkategori di jadikan satu menampilkan data ke blade biar lebih praktis 
    // dan tidak banyak method class yang di panggil di route hnya cukup satu method saja untuk memanggil data berdasarkan kategori
     public function homepage_category() {
        // di count section (berita artikel)
        $card1 = Article::where( 'category', 'prestasi' )
        ->latest()
        ->take( 1 )
        ->get();
        $card2 = Article::where( 'category', 'kegiatan' )
        ->latest()
        ->take( 1 )
        ->get();
        $card3 = Article::where( 'category', 'info spmb' )
        ->latest()
        ->take( 1 )
        ->get();
        $card4 = Article::where( 'category', ['umum', 'bebas'] )
        ->latest()
        ->take( 1 )
        ->get();

        // data cms hero, profile, dan footer
        $homepage = homepages::all();

        // data cms eskul
        $eskul = Eskul::all();

        // di count section (guru)
        $guru = Teacher::all();
        $countGuru = $guru->count();

        $profile = Profile::all();

        // $testimoni = Saran::all();  masih tahap pengembangan

        // data cms section prestasi
        $prestasi = Prestasi::all();

        // di count section (staff)
        $staff = Staff::all();
        $countStaff = $staff->count();

        // $countStaff = Teacher::select('title')
        // ->groupBy('staff')
        // ->selectRaw('count(*) as total')
        // ->get();
        return view( 'pages.page_beranda.beranda', compact( 'card1', 'card2', 'card3', 'card4', 'countGuru', 'countStaff', 'homepage', 'prestasi', 'eskul', 'profile' ) );
    }
    // end
}
