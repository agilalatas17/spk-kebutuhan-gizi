<?php

namespace Database\Seeders;

use App\Models\Kriteria;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama_kriteria' => 'Kalori',
                'atribut' => 'cost',
                'bobot' => 0.25,
                'user_id' => 1
            ],
            [
                'nama_kriteria' => 'Kandungan Protein',
                'atribut' => 'benefit',
                'bobot' => 0.2,
                'user_id' => 1
            ],
            [
                'nama_kriteria' => 'Kandungan Lemak Sehat',
                'atribut' => 'benefit',
                'bobot' => 0.15,
                'user_id' => 1
            ],
            [
                'nama_kriteria' => 'Kandungan Serat',
                'atribut' => 'benefit',
                'bobot' => 0.15,
                'user_id' => 1
            ],
            [
                'nama_kriteria' => 'Kandungan Vitamin dan Mineral',
                'atribut' => 'benefit',
                'bobot' => 0.15,
                'user_id' => 1
            ],
            [
                'nama_kriteria' => 'Indeks Glikemik (IG)',
                'atribut' => 'cost',
                'bobot' => 0.05,
                'user_id' => 1
            ],
            [
                'nama_kriteria' => 'Usia',
                'atribut' => 'benefit',
                'bobot' => 0.05,
                'user_id' => 1
            ],
        ];

        foreach($data as $item) {
           Kriteria::create($item);
        }
    }
}