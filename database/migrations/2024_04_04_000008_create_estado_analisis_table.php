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
        Schema::create('estado_analisis', function (Blueprint $table) {
            $table->increments('idestado_analisis');
            $table->dateTime('created')->nullable(false);
            $table->enum('isactive', ['Y','N'])->nullable(false);
            $table->string('estado',100)->nullable(false);
            $table->dateTime('datefrom')->nullable(false);
            $table->dateTime('dateto')->nullable(true);
            $table->decimal('datediff')->nullable(true);
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
        Schema::dropIfExists('estado_analisis');
    }
};
