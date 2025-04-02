<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('noticias', function (Blueprint $table) {
        $table->id();
        $table->string('titulo');
        $table->string('subtitulo')->nullable();
        $table->text('contenido');
        $table->string('autor')->nullable();
        $table->string('categoria')->nullable();
        $table->string('imagen')->nullable();
        $table->dateTime('fecha_publicacion')->default(DB::raw('CURRENT_TIMESTAMP'));
        $table->boolean('destacada')->default(false);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('noticias');
    }
};
