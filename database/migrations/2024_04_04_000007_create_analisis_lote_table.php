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
        Schema::create('analisis_lote', function (Blueprint $table) {
            $table->increments('idanalisis_lote');
            $table->dateTime('created')->nullable(false);
            $table->integer('createdby')->unsigned()->nullable(true);
            $table->enum('isactive', ['Y','N'])->nullable(false);
            $table->integer('idlote_produccion')->unsigned()->nullable(false);
            $table->foreign('idlote_produccion')->references('idlote_produccion')->on('lote_produccion')->cascadeOnUpdate()->cascadeOnDelete();

            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analisis_lote');
    }
};
