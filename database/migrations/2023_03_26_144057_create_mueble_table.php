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
        Schema::create('mueble', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->integer('serial');

            $table->bigInteger('ubicacionmueble_id')->unsigned();
            $table->bigInteger('responsable_id')->unsigned();
            $table->bigInteger('tipomueble_id')->unsigned();
            $table->datetime('fecha_creacion');
            $table->datetime('fecha_modificacion');

            $table->foreign('ubicacionmueble_id')->references('id')->on('ubicacionmueble');
            $table->foreign('responsable_id')->references('id')->on('responsable');
            $table->foreign('tipomueble_id')->references('id')->on('tipomueble');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mueble');
    }
};
