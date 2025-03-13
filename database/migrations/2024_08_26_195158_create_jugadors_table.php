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
        Schema::create('jugadors', function (Blueprint $table) {
            $table->id();
            $table->string("file_uri")->nullable();
            $table->string('nombre');
            $table->string('apellido');
            $table->date('fecha_nac');
            $table->string('direccion')->nullable();
            $table->string('telefono');
            $table->string('email')->unique();
            $table->string('posicion');
            $table->string('num_camiseta');

            $table->foreignId('equipo_id')->constrained('equipos')->onDelete('cascade'); 
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jugadors');
    }
};
