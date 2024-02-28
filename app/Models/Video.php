<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [

        'titre_video',
        'lien_video',
        'resume_video',
        'description_video',
        'public_video',
        'image_video',
    ];
}
