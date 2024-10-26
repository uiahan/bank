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
        Schema::create('laba_rugis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('rincian_biaya');
            $table->date('tanggal');
            $table->char('jumlah_rincian');
            $table->string('jumlah_persen');
            $table->char('jumlah_akhir');
            $table->string('keterangan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laba_rugis');
    }
};
