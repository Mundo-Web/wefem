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


            $table->boolean('destacado')->default(false);


            // Precios y descuentos
            $table->decimal('precio', 10, 2);
            $table->boolean('en_oferta')->default(false);
            $table->decimal('precio_oferta', 10, 2)->nullable();
            $table->decimal('porcentaje_oferta', 10, 2)->nullable();

            // Inventario
            $table->integer('stock')->default(0);
            $table->string('sku')->unique();

            // Información adicional
            $table->decimal('peso_empaque', 10, 2)->nullable();
            $table->boolean('devolucion')->default(true);
            $table->string('tipo_vendedor')->default('Vendedor verificado');
            $table->boolean('garantia_entrega')->default(true);
            $table->boolean('envio_gratis')->default(true);

            $table->string('imagen')->nullable();

            $table->text('especificaciones')->nullable();

            $table->text('album')->nullable();
            $table->text('manuales')->nullable();
            $table->string('slug')->unique();

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
