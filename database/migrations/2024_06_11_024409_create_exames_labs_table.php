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
        Schema::create('exames_labs', function (Blueprint $table) {
            $table->id();
            
            $table->string('nome')->index();
            $table->string('marcador')->index();

            $table->decimal('valor_referencia_homem_min')->nullable();
            $table->decimal('valor_referencia_homem_max')->nullable();
            $table->decimal('valor_referencia_mulher_min')->nullable();
            $table->decimal('valor_referencia_mulher_max')->nullable();

            $table->string('valor_referencia_unidade')->nullable();

            $table->decimal('valor_ideal_homem_baixo_risco_min')->nullable();
            $table->decimal('valor_ideal_homem_baixo_risco_max')->nullable();
            $table->decimal('valor_ideal_mulher_baixo_risco_min')->nullable();
            $table->decimal('valor_ideal_mulher_baixo_risco_max')->nullable();

            $table->decimal('valor_ideal_homem_leve_risco_min')->nullable();
            $table->decimal('valor_ideal_homem_leve_risco_max')->nullable();
            $table->decimal('valor_ideal_mulher_leve_risco_min')->nullable();
            $table->decimal('valor_ideal_mulher_leve_risco_max')->nullable();

            $table->decimal('valor_ideal_homem_moderado_risco_min')->nullable();
            $table->decimal('valor_ideal_homem_moderado_risco_max')->nullable();
            $table->decimal('valor_ideal_mulher_moderado_risco_min')->nullable();
            $table->decimal('valor_ideal_mulher_moderado_risco_max')->nullable();

            $table->decimal('valor_ideal_homem_alto_risco_min')->nullable();
            $table->decimal('valor_ideal_homem_alto_risco_max')->nullable();
            $table->decimal('valor_ideal_mulher_alto_risco_min')->nullable();
            $table->decimal('valor_ideal_mulher_alto_risco_max')->nullable();

            $table->decimal('valor_ideal_homem_muito_alto_risco_min')->nullable();
            $table->decimal('valor_ideal_homem_muito_alto_risco_max')->nullable();
            $table->decimal('valor_ideal_mulher_muito_alto_risco_min')->nullable();
            $table->decimal('valor_ideal_mulher_muito_alto_risco_max')->nullable();

            $table->string('valor_ideal_unidade')->nullable();
            $table->string('valor_ideal_obs')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exames_labs');
    }
};
