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
        Schema::create('det_seg_esp_estudiantes', function (Blueprint $table) {
            $table->id('idDet_seg_esp_estudiantes');
            $table->string('codigo_seg_esp', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('det_seg_esp_estudiantes');
    }
};
