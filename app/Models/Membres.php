<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Membres extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [

        'nom_membre',
        'fonction_membre',
        'email_membre',
        'numero_membre',
        'public_membre',
        'image_membre',
    ];
}
