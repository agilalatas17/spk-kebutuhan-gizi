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
        return view('admin.kriteria.add');
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

    public function destroy($id) {
        $data = Kriteria::findOrFail($id);
        $data->delete();

        return redirect()->route('admin.kriteria.index')->with('success', 'Data berhasil dihapus!');
    }
}