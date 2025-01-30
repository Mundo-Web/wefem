<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'slug',
        'descripcion',
    ];
    // app/Models/CategoryPost.php
    public function posts()
    {
        return $this->hasMany(Blog::class, 'category_post_id'); // Especificar la clave foránea
    }
}
