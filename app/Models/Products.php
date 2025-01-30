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

        'precio',
        'destacado',
        'stock',

        'imagen',

        'especificaciones',

        'album',
        'manuales',

        'categoria_id',

        'brand_id',

        'visible',
        'status'
    ];
}
