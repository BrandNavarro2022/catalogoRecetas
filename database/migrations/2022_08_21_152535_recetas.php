<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Recetas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recetas', function (Blueprint $table) {
                $table->id();
                $table->string('nombre');
                $table->foreignId('categoria_id')->constrained();
                $table->string('descripcion');
                $table->string('imagen');
                $table->string('instrucciones');
                $table->string('ingredientes');
                $table->string('variaciones');
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recetas');
    }
}
