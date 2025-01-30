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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_post_id')->nullable();
            $table->string('titulo');
            $table->text('extracto')->nullable();
            $table->longText('descripcion')->nullable();
            $table->text('imagen')->nullable();
            $table->boolean('destacado')->default(false);
            $table->boolean('visible')->default(true);
            $table->string('slug')->nullable();
            $table->date('fecha_publicacion')->nullable();
            $table->date('fecha_destacado')->nullable();
            $table->timestamps();
            $table->foreign('category_post_id')->references('id')->on('category_posts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
