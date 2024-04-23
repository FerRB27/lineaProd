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
        Schema::create('parametros_producto', function (Blueprint $table) {
            $table->increments('idparametros_producto');
            $table->dateTime('created')->nullable(false);
            $table->enum('isactive', ['Y','N'])->nullable(false);
            $table->decimal('min_humedad')->nullable(true);
            $table->decimal('max_humedad')->nullable(true);
            $table->decimal('min_temperatura')->nullable(true);
            $table->decimal('max_temperatura')->nullable(true);
            $table->decimal('min_sodio')->nullable(true);
            $table->decimal('max_sodio')->nullable(true);
            $table->decimal('min_proteina')->nullable(true);
            $table->decimal('max_proteina')->nullable(true);
            $table->decimal('min_calcio')->nullable(true);
            $table->decimal('max_calcio')->nullable(true);
            $table->decimal('min_grasa')->nullable(true);
            $table->decimal('max_grasa')->nullable(true);
            $table->integer('idproducto')->unsigned()->nullable(false);
            $table->foreign('idproducto')->references('idproducto')->on('producto')->cascadeOnUpdate()->noActionOnDelete();

            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parametros_producto');
    }
};
