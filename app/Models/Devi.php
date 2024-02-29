<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Devi extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [

        'personne_devis',
        'domaine_devis',
        'numero_devis',
        'pays_devis',
        'ville_devis',
        'adresse_devis',
        'nom_devis',
        'numeroc_devis',
        'emailc_devis',



    ];
}
