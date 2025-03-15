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
        Schema::create('recetas', function (Blueprint $table) {
            $table->increments('id');
            $table->String('Titulo', 100);
            $table->unsignedInteger('usuarios_id');
            $table->unsignedInteger('categorias_id');
            $table->String('Instrucciones', 100);
            $table->timestamps();

            $table->foreign('usuarios_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->foreign('categorias_id')->references('id')->on('categorias')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recetas');
    }
};
