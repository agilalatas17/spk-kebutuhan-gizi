<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Crips extends Model
{
    use HasFactory;

    protected $table = 'tb_crips';
    protected $fillable = ['nama_crips', 'bobot', 'id_kriteria'];

    public function kriteria(): BelongsTo {
        return $this->belongsTo(Kriteria::class);
    }
}