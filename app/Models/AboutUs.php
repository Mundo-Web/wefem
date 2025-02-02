<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'breve_historia',
        'imagen',
        'mision',
        'vision',
        'imagen_vision_mision',
        'sello_garantia_titulo',
        'sello_garantia_subtitulo',
        'sello_garantia_contenido',
        'imagen_sello_garantia',
    ];
}
