<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_makanan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_makanan', 50);
            $table->enum('kalori', ['>450 kcal', '351-450 kcal', '251-351 kcal', '150-250 kcal', '<150 kcal']);
            $table->enum('protein', ['<5 gr', '5-9 gr', '10-14 gr', '15-20 gr', '>20 gr']);
            $table->enum('lemak_sehat', ['<2 gr', '2-3 gr', '4-5 gr', '6-8 gr', '>8 gr']);
            $table->enum('serat', ['<2 gr', '2-3 gr', '4-5 gr', '6-8 gr', '>8 gr']);
            $table->enum('vitamin_mineral', ['<20%', '20-39%', '40-59%', '60-80%', '>80%']);
            $table->enum('index_glikemik', [ '>80', '70-80', '56-69', '40-55', '40']);
            $table->enum('usia', ['>70 tahun', '61-70 tahun', '46-60 tahun', '31-45 tahun', '19-30 tahun']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('makanan');
    }
};