<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'producto',
        'extract',
        'description',

        'destacado',


        // Precios y descuentos
        'precio',
        'en_oferta',
        'precio_oferta',
        'porcentaje_oferta',

        // Inventario
        'stock',
        'sku',
        // Información adicional
        'peso_empaque',
        'devolucion',
        'tipo_vendedor',
        'garantia_entrega',
        'envio_gratis',
        'slug',

        'imagen',

        'especificaciones',

        'album',
        'manuales',

        'categoria_id',

        'brand_id',

        'visible',
        'status'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categoria_id');
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    protected static function booted()
    {
        static::creating(function ($product) {
            if (empty($product->sku)) {
                $product->sku = 'PROD-' . strtoupper(substr($product->categoria_id, 0, 3)) . '-' . strtoupper(substr($product->producto, 0, 3)) . '-' . uniqid();
            }
        });
    }
}
