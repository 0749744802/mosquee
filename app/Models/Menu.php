<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [

        'menu_principale_id',
        'sous_menu',
        'ordre_menu',
        'public_menu',
        'lien_menu',

    ];
    public function menu_principale(): BelongsTo
    {
        return $this->belongsTo(Menu_principale::class);
    }
}
