<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Slide extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [

        'titre_slide',
        'sous_titre_slide',
        'description_slide',
        'lien_slide',
        'public_slide',
        'image_slide',
    ];
}
