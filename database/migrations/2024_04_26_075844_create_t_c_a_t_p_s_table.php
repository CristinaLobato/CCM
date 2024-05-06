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
        Schema::create('t_c_a_t_p_s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('fecha_validez');
            $table->string('numero_serie');
            $table->date('caducidad');
            $table->string('codigo_susp');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_c_a_t_p_s');
    }
};
