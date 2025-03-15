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
        Schema::create('detalles_recetas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('recetas_id');
            $table->unsignedInteger('ingredientes_id');
            $table->string('cantidad');
            $table->timestamps();

            $table->foreign('recetas_id')->references('id')->on('recetas');
            $table->foreign('ingredientes_id')->references('id')->on('ingredientes');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles_recetas');
    }
};
