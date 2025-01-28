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
        Schema::create('home_views', function (Blueprint $table) {
            $table->id();
            //hero section
            $table->string('titleHero')->nullable();
            $table->string('subtitleHero')->nullable();
            //services section
            $table->string('titleServicios')->nullable();
            $table->string('subtitleServicios')->nullable();
            //products section
            $table->string('titleProductos')->nullable();
            $table->string('subtitleProductos')->nullable();
            //blogs section
            $table->string('titleBlogs')->nullable();
            $table->string('subtitleBlogs')->nullable();
            //newsletter section
            $table->string('titleNewsletter')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_views');
    }
};
