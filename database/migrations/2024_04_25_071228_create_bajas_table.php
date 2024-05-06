<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('bajas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('fecha_baja');
            $table->string('motivo');
            $table->boolean('baja_certificado');
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('bajas');
    }
};
