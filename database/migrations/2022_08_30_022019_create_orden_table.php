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
        Schema::create('orden', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido_pat');
            $table->integer('total');
            $table->string('estado');
            $table->date('fecha', $precision = 0);
            $table->integer('telefono');
            $table->foreignId('id_chef');
            $table->foreignId('id_camarero')
            ->constrained('chef')
            ->constrained('camarero')
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
        Schema::dropIfExists('orden');
    }
};
