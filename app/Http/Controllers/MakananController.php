<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function index() {
        $makanan = Makanan::all();

        return view('admin.makanan.index', ['makanan' => $makanan]);
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

    public function edit($id) {
        $makanan = Makanan::find($id);

        return view('admin.makanan.edit', compact('makanan'));
    }

    public function update(Request $request, $id) {
        $makananId = Makanan::find($id);
        $dataUpdate = $request->validate([
            'nama_makanan' => 'required|string|max:50',
            'kalori' => 'required',
            'protein' => 'required',
            'lemak_sehat' => 'required',
            'serat' => 'required',
            'vitamin_mineral' => 'required',
            'index_glikemik' => 'required',
            'usia' => 'required',
        ]);


        $makananId->update($dataUpdate);

        return redirect()->route('admin.makanan.index')->with('success', 'Makanan berhasil ditambahkan!');
    }

    public function destroy($id) {
        $data = Makanan::findOrFail($id);
        $data->delete();

        return redirect()->route('admin.makanan.index')->with('success', 'Data berhasil dihapus!');
    }
 }