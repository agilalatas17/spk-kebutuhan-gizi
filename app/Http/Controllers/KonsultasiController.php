<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use App\Models\Customer;
use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    public function index(Request $request)
    {
        $hasil = collect();

        if ($request->isMethod('post')) {
            $dataStore = $request->validate([
                'nama' => 'required',
                'jenis_kelamin' => 'required',
                'usia' => 'required',
            ]);
            $usia = $dataStore['usia'];
            $query = Makanan::query();
            
            if ($usia) {
                $query->where('usia', 'LIKE', "%$usia%");
            }
            
            $hasil = $query->get();

            
    
            Customer::create($dataStore);
        }

        return view('konsultasi-gizi', compact('hasil'));
    }
}