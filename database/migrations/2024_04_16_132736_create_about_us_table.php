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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('breve_historia')->nullable();
            $table->text('imagen')->nullable();
            $table->text('mision')->nullable();
            $table->text('vision')->nullable();
            $table->text('imagen_vision_mision')->nullable();
            $table->text('cultura_trabajo')->nullable();
            $table->string('sello_garantia_titulo')->nullable();
            $table->string('sello_garantia_subtitulo')->nullable();
            $table->text('sello_garantia_contenido')->nullable();
            $table->text('imagen_sello_garantia')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
