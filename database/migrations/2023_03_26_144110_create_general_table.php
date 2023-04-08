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
        Schema::create('general', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string('nombre',255);
            $table->decimal('costo',50);
            $table->string('estado',255);
            $table->string('descripcion',255);
            $table->bigInteger('sede_id')->unsigned();
            $table->bigInteger('mueble_id')->unsigned();
            $table->bigInteger('inmueble_id')->unsigned();
            $table->datetime('fecha_creacion');
            $table->datetime('fecha_modificacion');

            $table->foreign('sede_id')->references('id')->on('sedes');
            $table->foreign('mueble_id')->references('id')->on('mueble');
            $table->foreign('inmueble_id')->references('id')->on('inmueble');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general');
    }
};
