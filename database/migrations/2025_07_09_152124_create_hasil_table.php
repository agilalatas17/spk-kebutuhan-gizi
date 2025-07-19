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
        Schema::create('tb_hasil', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_makanan');
            $table->unsignedBigInteger('id_nilai');
            $table->float('nilai_total', 8);
            $table->integer('ranking');
            $table->foreign('id_makanan')->references('id')->on('tb_makanan')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_nilai')->references('id')->on('tb_nilai')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil');
    }
};