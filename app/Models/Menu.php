<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [

        'principale_menu',
        'sous_menu',
        'ordre_menu',
        'public_menu',

    ];
}
