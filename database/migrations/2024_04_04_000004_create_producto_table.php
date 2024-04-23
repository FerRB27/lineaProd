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
        Schema::create('producto', function (Blueprint $table) {
            $table->increments('idproducto');
            $table->dateTime('created')->nullable(false);
            $table->enum('isactive', ['Y', 'N']);
            $table->string('nombre', 100)->nullable(false);
            $table->string('codigo', 100)->nullable(false);
            $table->integer('idlinea_produccion')->unsigned()->nullable(false);
            $table->foreign('idlinea_produccion')->references('idlinea_produccion')->on('linea_produccion')->cascadeOnUpdate()->noActionOnDelete();

            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto');
    }
};
