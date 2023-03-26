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
        Schema::create('usuario', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string('nombre',255);
            $table->string('correo',255)->unique();
            $table->string('password',255);
            $table->bigInteger('perfil_idperfil')->unsigned();
            $table->date('fecha_creacion');
            $table->date('fecha_modificacion');

            $table->foreign('perfil_idperfil')->references('id')->on('perfil');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};
