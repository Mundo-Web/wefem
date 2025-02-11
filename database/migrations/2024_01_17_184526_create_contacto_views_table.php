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
        Schema::create('contacto_views', function (Blueprint $table) {
            $table->id();

            $table->string('titleSection')->nullable();
            $table->string('subtitleSection')->nullable();
            $table->string('titleForm')->nullable();
            $table->text('subtitleForm')->nullable();

            $table->string('titleFaqs')->nullable();
            $table->string('subtitleFaqs')->nullable();
            $table->string('titleSlider')->nullable();
            $table->string('subtitleSlider')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacto_views');
    }
};
