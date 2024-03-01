<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Site extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [

        'nom_site',
        'numero1_site',
        'numero2_site',
        'numero3_site',
        'fixe1_site',
        'fixe2_site',
        'facebook_site',
        'whatsapp_site',
        'linkedin_site',
        'google_site',
        'tag_site',
        'map_site',
        'description_site',
        'email1_site',
        'email2_site',
        'email3_site',
        'logo_site',

    ];
}
