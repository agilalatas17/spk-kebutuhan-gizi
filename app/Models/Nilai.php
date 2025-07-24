<?php

namespace App\Models;

use App\Models\Makanan;
use App\Models\Kriteria;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Nilai extends Model
{
    use HasFactory;

    protected $table = 'tb_nilai';
    protected $fillable = ['id_makanan', 'id_kriteria', 'nilai'];

    public function makanan(): BelongsTo {
        return $this->belongsTo(Makanan::class);
    }

    public function kriteria(): BelongsTo {
        return $this->belongsTo(Kriteria::class);
    }
}