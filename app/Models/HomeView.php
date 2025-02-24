<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeView extends Model
{
    use HasFactory;
    protected $fillable = [

        //hero section
        'titleHero',
        'subtitleHero',
        //services section
        'titleServicios',
        'subtitleServicios',
        //products section
        'titleProductos',
        'subtitleProductos',
        //blogs section
        'titleBlogs',
        'subtitleBlogs',
        //newsletter section
        'titleNewsletter',
        'imageNewsletter'
    ];
}
