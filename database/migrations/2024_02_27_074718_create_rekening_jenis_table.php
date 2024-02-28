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
        Schema::create('rekening_jenis', function (Blueprint $table) {
            $table->id();
            $table->string('kd_rekening_1');
            $table->string('kd_rekening_2');
            $table->string('kd_rekening_3');
            $table->string('nm_rekening');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekening_jenis');
    }
};
