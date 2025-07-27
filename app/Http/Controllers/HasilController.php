<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Makanan;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function index() {
        $makanan = Makanan::with('nilai')->get();
        $kriteria = Kriteria::all();

        // inisialisasi
        $normalisasi = [];
        $nilaiAwal = [];
        $skor = [];

        foreach($makanan as $m) {
            foreach($kriteria as $k) {
                $nilai = optional($m->nilai->where('id_kriteria', $k->id)->first())->nilai ?? 0;
                $nilaiAwal [$m->id] [$k->id] = $nilai; 
            }
        }

        foreach ($kriteria as $k) {
            $nilai_kriteria = Nilai::where('id_kriteria', $k->id)->pluck('nilai');
            $max = $nilai_kriteria->max();
            $min = $nilai_kriteria->min();
            
            foreach ($makanan as $m) {
                $nilai = $nilaiAwal[$m->id][$k->id] ?? 0;
                $normal = 0;

                // Menghindari pembagian 0
                if ($nilai !== 0) {
                    $normal = ($k->atribut === 'benefit') ? $nilai / $max : $min / $nilai;
                }

                $normalisasi[$m->id][$k->id] = $normal;
            }
        }

        foreach ($makanan as $m) {
            $total = 0;
            foreach ($kriteria as $k) {
                $normal = $normalisasi[$m->id][$k->id] ?? 0;
                $total += $normal * $k->bobot;
            }

            $skor[] = [
                'nama_makanan' => $m->nama_makanan,
                'skor' => $total
            ];
        }

        $hasil = collect($skor)->sortByDesc('skor')->values();
        
        return view('admin.hasil.index', compact('hasil', 'makanan', 'kriteria', 'nilaiAwal', 'normalisasi'));
    }
}