<?php

namespace App\Http\Controllers;

use App\Models\homepages;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    // pages jurusan
    public function index()
    {
         $homepage = homepages::all(); // ini di panggil di page jurusan karena page jurusan ada footer yang data nya dinamis/bisa di ubah make cms

         return view('pages.page_jurusan.jurusan', compact('homepage'));
    }
}
