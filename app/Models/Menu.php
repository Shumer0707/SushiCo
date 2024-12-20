<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function ingr(){
        return $this->belongsToMany(Ingredient::class, 'ingredient_menus', 'menu_id', 'ingredient_id');
    }
}
