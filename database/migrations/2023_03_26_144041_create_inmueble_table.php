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
        Schema::create('inmueble', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->decimal('m2',10);
            $table->integer('numpisos');
            $table->integer('numhabitacion');
            $table->string('ubicacion_inmueble',255);
            $table->string('dueno',255);
            $table->decimal('impuestopredial',30);
            $table->bigInteger('tipo_idtipo')->unsigned();
            $table->datetime('fecha_creacion');
            $table->datetime('fecha_modificacion');

            $table->foreign('tipo_idtipo')->references('id')->on('tipoinmueble');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inmueble');
    }
};
