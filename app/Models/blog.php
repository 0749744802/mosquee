<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class blog extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [

        'titre_blog',
        'public_blog',
        'resume_blog',
        'description_blog',
        'image_blog',
    ];
}
