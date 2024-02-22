<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produit extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [

        'titre_produit',
        'public_produit',
        'categorie_produit_id',
        'resume_produit',
        'description_produit',
        'stock_produit',
        'prix_produit',
        'reduction_produit',
        'appreciation_produit_id',
        'image_produit',
    ];
    public function getAllpages()
    {
        return  Produit::all();
    }
    public function categorie_produit(): BelongsTo
    {
        return $this->belongsTo(Categorie_produit::class);
    }
    public function appreciation_produit(): BelongsTo
    {
        return $this->belongsTo(Appreciation_produit::class);
    }
}
