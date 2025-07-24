<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    use HasFactory;

    protected $table = 'tb_makanan';
    protected $fillable = ['nama_makanan', 'kalori', 'protein', 'lemak_sehat', 'serat', 'vitamin_mineral', 'index_glikemik', 'usia'];
}