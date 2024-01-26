<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre_page',
        'categorie_page_id',
        'public',
        'resume_page',
        'description_page',
        'image',
    ];
}
