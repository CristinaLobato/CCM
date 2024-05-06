<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre');
            $table->string('apellido1');
            $table->string('apellido2');
            $table->string('sexo');
            $table->string('regimen');
            $table->string('area');
            $table->string('departamento');
            $table->date('fecha_incorporacion');
            $table->string('nif');
            $table->string('correo');

        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('personals');
    }
};