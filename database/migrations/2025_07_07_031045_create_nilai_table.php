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
        Schema::create('tb_nilai', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_makanan');
            $table->unsignedBigInteger('id_kriteria');
            $table->float('nilai_bobot', 8);
            $table->foreign('id_makanan')->references('id')->on('tb_makanan')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_kriteria')->references('id')->on('tb_kriteria')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai');
    }
};