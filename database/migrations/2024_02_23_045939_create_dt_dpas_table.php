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
        Schema::create('dt_dpas', function (Blueprint $table) {
            $table->id();
            $table->string('program');
            $table->string('kegiatan');
            $table->string('no_dppa', 100);
            $table->string('no_dpa', 100);
            $table->date('tgl_dppa');
            $table->date('tgl_dpa');
            $table->year('tahun');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dt_dpas');
    }
};
