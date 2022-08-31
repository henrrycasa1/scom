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
        Schema::create('solicitud_chef', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');
            $table->string('status');
            $table->date('fecha', $precision = 0);
            $table->foreignId('id_chef')
            ->constrained('chef')
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
        Schema::dropIfExists('solicitud_chef');
    }
};
