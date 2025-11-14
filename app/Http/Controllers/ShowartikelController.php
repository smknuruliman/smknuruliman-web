<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\homepages;
use Illuminate\Http\Request;

class ShowartikelController extends Controller {

    // page show artikel detail
    public function show( $slug ) {
        $post = Article::where( 'slug', $slug )->firstOrFail();

        $homepage = homepages::all(); // ini di panggil di page showArtikel karena page showArtkel ada footer yang data nya dinamis/bisa di ubah make cms

        // Ambil 3 postingan lain dengan tag yang sama, tapi bukan yang sedang ditampilkan
        $relatedPosts = Article::where( 'category', $post->category )
        ->where( 'id', '!=', $post->id )
        ->latest()
        ->get();
        // $relatedPosts = Article::take( 3 )->get();

        return view( 'pages.page_slug.showartikel', compact( 'post', 'relatedPosts', 'homepage' ) );
    }
}
