<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesa', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('min_capacidad');
            $table->integer('max_capacidad');
            $table->string('status');
            $table->foreignId('id_orden');
            $table->foreignId('id_camarero');
            $table->foreignId('id_cliente')
            ->constrained('orden')
            ->constrained('camarero')
            ->constrained('cliente')
            ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mesa');
    }
};
