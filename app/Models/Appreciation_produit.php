<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appreciation_produit extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=[
        "titre_appreciation"
    ];

    public function produits(): HasMany
    {
        return $this->hasMany(Produit::class);
    }
}
