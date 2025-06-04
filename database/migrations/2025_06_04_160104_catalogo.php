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
        Schema::create('artistas', function (Blueprint $table) {
            $table->increments('idArtista');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('img');
        });

         Schema::create('albunes', function (Blueprint $table) {
            $table->increments('idAlbum')->primary();
            $table->unsignedInteger('idArtista')->nullable()->index();
            $table->foreign('idArtista')->references('idArtista')->on('artistas');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('img');
             $table->string('genero');
        });

         Schema::create('canciones', function (Blueprint $table) {
            $table->increments('idCancion')->primary();
            $table->unsignedInteger('idArtista')->nullable()->index();
            $table->foreign('idArtista')->references('idArtista')->on('artistas');
            $table->string('descripcion');
            $table->string('ruta');
        });

         Schema::create('list_canciones', function (Blueprint $table) {
            $table->unsignedInteger('idCancion')->nullable()->index();
            $table->foreign('idCancion')->references('idCancion')->on('canciones');
            $table->unsignedInteger('idList')->nullable()->index();
            $table->foreign('idList')->references('idList')->on('playlist');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('albunes');
        Schema::dropIfExists('artistas');
        Schema::dropIfExists('list_canciones');
        Schema::dropIfExists('canciones');
        
    }
};
