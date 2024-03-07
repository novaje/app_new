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
        Schema::create('rincian_rek_object', function (Blueprint $table) {
            $table->id('id_rincian');
            $table->string('kd_rek_object', 50);
            $table->string('nm_rekning');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rincian_rek_object');
    }
};
