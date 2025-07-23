<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function index() {
        $kriteria = Makanan::all();

        return view('admin.makanan.index', ['kriteria' => $kriteria]);
    }

    public function create() {
        return view('admin.makanan.create');
    }

    public function store(Request $request) {
        $dataStore = $request->validate([
            'nama_makanan' => 'required|string|max:50',
            'kalori' => 'required',
            'protein' => 'required',
            'lemak_sehat' => 'required',
            'serat' => 'required',
            'vitamin_mineral' => 'required',
            'index_glikemik' => 'required',
            'usia' => 'required',
        ]);

        Makanan::create($dataStore);

        return redirect()->route('admin.makanan.index')->with('success', 'Makanan berhasil ditambahkan!');
    }

    public function edit() {
        return view('admin.makanan.edit');
    }

    public function update() {

    }

    public function destroy() {
    }
 }