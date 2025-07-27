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
        Schema::create('tb_customer', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->enum('usia', ['>70 tahun', '61-70 tahun', '46-60 tahun', '31-45 tahun', '19-30 tahun']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};