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
        Schema::create('linea_produccion', function (Blueprint $table) {
            $table->increments('idlinea_produccion');
            $table->enum('isactive', ['Y', 'N']);
            $table->string('nombre', 100);

            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('linea_produccion');
    }
};
