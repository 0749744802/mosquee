<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Page extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'titre_page',
        'categorie_id',
        'public',
        'resume_page',
        'description_page',
        'image',
    ];



    // Get all page
    public function getAllpages()
    {
        return  Page::all();
    }



    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class);
    }
}
