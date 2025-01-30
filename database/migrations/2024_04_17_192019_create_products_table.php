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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('producto');
            $table->string('extract')->nullable();
            $table->text('description')->nullable();

            $table->decimal('precio', 12, 2)->default(0)->nullable();
            $table->boolean('destacado')->default(false);
            $table->decimal('stock', 12, 2)->default(0)->nullable();

            $table->string('imagen')->nullable();

            $table->text('especificaciones')->nullable();

            $table->text('album')->nullable();
            $table->text('manuales')->nullable();

            $table->unsignedBigInteger('categoria_id')->nullable();

            $table->unsignedBigInteger('brand_id')->nullable();

            $table->boolean('visible')->default(true);
            $table->boolean('status')->default(true);
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categories');
            $table->foreign('brand_id')->references('id')->on('brands');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
