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
        Schema::create('detalle_analisis_lote', function (Blueprint $table) {
            $table->increments('iddetalle_analisis_lote');
            $table->dateTime('created')->nullable(false);
            $table->enum('isactive', ['Y','N'])->nullable(false);
            $table->decimal('humedad')->nullable(false);
            $table->decimal('temperatura')->nullable(false);
            $table->decimal('sodio')->nullable(false);
            $table->decimal('proteina')->nullable(false);
            $table->decimal('calcio')->nullable(false);
            $table->decimal('grasa')->nullable(false);
            $table->integer('idanalisis_lote')->unsigned()->nullable(false);
            $table->foreign('idanalisis_lote')->references('idanalisis_lote')->on('analisis_lote')->cascadeOnUpdate()->cascadeOnDelete();

            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_analisis_lote');
    }
};
