<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=["parent","fils"];


    /**
     * (1, N) : One to Many
     */
    public function pages(): HasMany
    {
        return $this->hasMany(Page::class);
    }
}
