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
        Schema::create('jugador_partido', function (Blueprint $table) {
            $table->id();
            $table->integer('goles')->nullable();;
            $table->integer('asistencias')->nullable();;
            $table->decimal('valor_tarjeta',8,2)->nullable();;
            $table->enum('estado', ["Pendiente", "Pagado"])->nullable();;

            $table->foreignId('partido_id')->constrained('partidos')->onDelete('cascade');
            $table->foreignId('jugador_id')->constrained('jugadors')->onDelete('cascade');
            $table->foreignId('tarjeta_id')->nullable()->constrained('tarjetas')->onDelete('cascade')->nullable();;
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jugador_partido');
    }
};
