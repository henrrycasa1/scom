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
        Schema::create('factura', function (Blueprint $table) {
            $table->id();
            $table->integer('total');
            $table->date('fecha', $precision = 0);
            $table->foreignId('id_cajero');
            $table->foreignId('id_orden');
            $table->foreignId('id_cliente')
            ->constrained('cajero')
            ->constrained('orden')
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
        Schema::dropIfExists('factura');
    }
};
