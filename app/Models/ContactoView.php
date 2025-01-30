<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactoView extends Model
{
    use HasFactory;

    protected $fillable = [

        'titleSection',
        'subtitleSection',
        'titleForm',
        'subtitleForm',
        'titleFaqs',
        'subtitleFaqs',
        'titleSlider',
        'subtitleSlider'

    ];
}
