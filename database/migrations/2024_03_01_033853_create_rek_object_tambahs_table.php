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
        Schema::create('rek_object_tambah', function (Blueprint $table) {
            $table->id('id_rekObject');
            $table->string('kd_rekening1', 10);
            $table->string('nm_rekening1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rek_object_tambah');
    }
};
