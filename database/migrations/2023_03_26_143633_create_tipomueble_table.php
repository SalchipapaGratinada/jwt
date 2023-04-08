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
        Schema::create('tipomueble', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string('nombre',255);

            $table->datetime('fecha_creacion');
            $table->datetime('fecha_modificacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipomueble');
    }
};
