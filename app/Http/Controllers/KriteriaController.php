<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KriteriaController extends Controller
{
    public function index() {
        $user = Auth::user();

        $data = Kriteria::where('user_id', $user->id)->get()->map(function($item) {
            $item->bobot = $item->bobot * 100;

            return $item;
        });
        
        return view('admin.kriteria.index', ['data' => $data]);
    }

    public function create() {
        return view('admin.kriteria.create');
    }

    public function store(Request $request) {
        $dataStore = $request->validate([
            'nama_kriteria' => 'required|string|max:50',
            'atribut' => 'required',
            'bobot' => 'required|numeric|min:0|max:100',
        ]);

        $dataStore['bobot'] = $dataStore['bobot'] / 100;
        $dataStore['user_id'] = auth()->id();

        Kriteria::create($dataStore);

        return redirect()->route('admin.kriteria.index')->with('success', 'Kriteria berhasil ditambahkan!');
    }

    public function edit($id) {
        $kriteria = Kriteria::find($id);
        $data = $kriteria;

        return view('admin.kriteria.edit', ['data' => $data]);
    }

    public function update(Request $request, $id) {
        $data = Kriteria::find($id);
        $dataUpdate = $request->validate([
            'nama_kriteria' => 'required|string|max:50',
            'atribut' => 'required',
            'bobot' => 'required|numeric|min:0|max:100',
        ]);

        if(isset($dataUpdate['bobot'])) {
            $dataUpdate['bobot'] = $dataUpdate['bobot'] / 100;
        }
        
        $dataUpdate['user_id'] = auth()->id();

        $data->update($dataUpdate);
        return redirect()->route('admin.kriteria.index')->with('success', 'Kriteria berhasil ditambahkan!');
    }

    public function destroy($id) {
        $data = Kriteria::findOrFail($id);
        $data->delete();

        return redirect()->route('admin.kriteria.index')->with('success', 'Data berhasil dihapus!');
    }
}