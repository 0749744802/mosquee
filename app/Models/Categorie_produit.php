<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie_produit extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=[
        "categorie_produit_principale",
        "categorie_produit_secondaire"
    ];


    /**
     * (1, N) : One to Many
     */
    public function produits(): HasMany
    {
        return $this->hasMany(Produit::class);
    }
}
