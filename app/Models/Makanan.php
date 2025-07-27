<?php

namespace App\Models;

use App\Models\Nilai;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Makanan extends Model
{
    use HasFactory;

    protected $table = 'tb_makanan';
    protected $fillable = ['nama_makanan', 'kalori', 'protein', 'lemak_sehat', 'serat', 'vitamin_mineral', 'index_glikemik', 'usia'];

    public function nilai(): HasMany {
        return $this->hasMany(Nilai::class, 'id_makanan');
    }
}