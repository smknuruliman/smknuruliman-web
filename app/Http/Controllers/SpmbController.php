<?php

namespace App\Http\Controllers;

use App\Models\spmb;
use Illuminate\Http\Request;

class SpmbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
    {
    //   return view('pages.page_spmb.form');
      return redirect()->back()->with('pengembangan', 'Mohon Maaf Formulir Spmb Sedang Tahap Pengembangan');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request) 
   {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'birth_place' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'gender' => 'required',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
            'prev_school' => 'required|string|max:255',
            'nisn' => 'required|string|max:20|unique:Registrasi_pelajar',
            'graduation_year' => 'required|digits:4',
            'major' => 'required|string|max:100',
            'avg_grade' => 'nullable|numeric',
            'achievements' => 'nullable|string',
            'parent_name' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('photos', 'public');
        }

        Spmb::create($validated);

        return redirect()->back()->with('success', 'Data pendaftaran berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(spmb $spmb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(spmb $spmb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, spmb $spmb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(spmb $spmb)
    {
        //
    }
}
