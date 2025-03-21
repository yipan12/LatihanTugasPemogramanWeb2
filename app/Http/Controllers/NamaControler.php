<?php

namespace App\Http\Controllers;

use App\Models\NamaModel;
use Illuminate\Http\Request;

class NamaControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("Index", [
            'title' => 'Halaman Utama',
            'nama' => 'Irpan Maulana',
            'email' => 'gamearcel@gmail.com',
            'telp' => '089648260834',
            'img' => asset('images/irpan maulana.jpeg')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambahData', ['title' => 'Tambah Data']);
    }

    public function show(NamaModel $namaModel)
    {
        return view('tampilData' , ['title' => 'Tampil Data']);
    }
    
    public function edit(NamaModel $namaModel)
    {
        return view('editData', ['title' => "Halaman Edit"]);
    }
    public function destroy(NamaModel $namaModel)
    {
        return view('destroyData', ['title' => 'Halaman Hapus']);
    }
    /**
     * Show the form for editing the specified resource.
     */
    
    public function store(Request $request)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NamaModel $namaModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
}
