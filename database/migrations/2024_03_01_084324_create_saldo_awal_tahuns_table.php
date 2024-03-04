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
        Schema::create('saldo_awal_tahun', function (Blueprint $table) {
            $table->id('saldo_id');
            $table->string('tahun_anggaran');
            $table->string('nama_puskesmas');
            $table->string('saldo_bank');
            $table->string('saldo_tunai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saldo_awal_tahun');
    }
};
