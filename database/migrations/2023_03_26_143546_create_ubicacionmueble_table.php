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
        Schema::create('ubicacionmueble', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string('piso',255);
            $table->string('bloque',255);
            $table->string('sala',255);
            $table->string('descripcion',255);

            $table->date('fecha_creacion');
            $table->date('fecha_modificacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ubicacionmueble');
    }
};
