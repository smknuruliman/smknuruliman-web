<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saran;
use Illuminate\Support\Facades\Auth;

class SaranController extends Controller
{
    // tahap pengembangan
    public function store(Request $request)
    {
        // $request->validate([
        //     'Nama' => 'required|string|max:100',
        //     'Email' => 'required|email|max:150',
        //     'pesan' => 'required|string|max:500',
        // ]);

        // Saran::create([
        //     'nama' => $request->Nama,
        //     'email' => $request->Email,
        //     'pesan' => $request->pesan,
        // ]);

        // return back()->with('success', 'Terima kasih atas saran Anda!');
    }
}
