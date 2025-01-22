<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsletterSubscriber extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'email',
        'phone',
        'verification_token', 
        'is_verified',
        'active',
    ];
}
