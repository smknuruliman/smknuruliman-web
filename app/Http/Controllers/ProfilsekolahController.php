<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\homepages;
use Illuminate\Http\Request;

class ProfilsekolahController extends Controller
{
    // pages profil sekolah
    public function index()
    {
        $guru = Teacher::all();
        $homepage = homepages::all(); // ini di panggil di page profil karena page profil ada footer yang data nya dinamis/bisa di ubah make cms

        return view('pages.page_profil.profil-sekolah', compact('guru', 'homepage'));
    }
}
