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
        Schema::create('administradores', function(Blueprint $table){
            $table->id('idAdministradores');
            $table->string('nivel_admin',25);
            $table->string('nombreAdmin',45);
            $table->string('correoAdmin',45);
            $table->string('telefonoAdmin',20);
            $table->string('usuarioAdmin',45);
            $table->string('claveAdmin',45);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administradores');
    }
};
