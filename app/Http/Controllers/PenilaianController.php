<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use App\Models\Kriteria;
use App\Models\Nilai;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    public function index() {
        $makanan = Makanan::all();
        $kriteria = Kriteria::all();

        return view('admin.penilaian.index', compact('makanan', 'kriteria'));
    }

    public function store(Request $request) {
        foreach($request->nilai as $makananId => $kriteria) {
            foreach($kriteria as $kriteriaId => $nilai) {
                $data = Nilai::updateOrCreate(
                    ['id_makanan' => $makananId, 'id_kriteria' => $kriteriaId],
                    ['nilai' => $nilai]
                );
            }
         }

        return redirect()->route('admin.penilaian.index')->with('success', 'Data penilaian berhasil disimpan.');
    }
}