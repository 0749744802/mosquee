<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Logiciel extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [

        'titre_logiciel',
        'lien_logiciel',
        'resume_logiciel',
        'description_logiciel',
        'public_logiciel',
        'image_logiciel',
    ];
}
