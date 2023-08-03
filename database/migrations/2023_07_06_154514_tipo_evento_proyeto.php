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
        Schema::create('tipo_evento_proyectos', function(Blueprint $table){
            $table->id('idTipo_evento_proyectos');
            $table->string('eventoProyecto', 25);
            $table->string('detalleEvento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_evento_proyectos');
    }
};
