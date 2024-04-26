<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu_principale extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [

        'titre_menu_principale',

    ];
    public function menus(): HasMany
    {
        return $this->hasMany(Menu::class);
    }
}
