<?php

namespace App\Models;

use App\Models\Crips;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kriteria extends Model
{
    use HasFactory;

    protected $table = 'tb_kriteria';
    protected $fillable = ['nama_kriteria', 'bobot', 'atribut', 'user_id'];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function crips(): HasMany {
        return $this->hasMany(Crips::class);
    }
}