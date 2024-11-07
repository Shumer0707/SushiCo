<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ru_menu extends Model
{
    use HasFactory;

    public function ingredients(){
        return $this->belongsToMany(Ingredient::class, 'ingredient_ru_menus', 'ru_menu_id', 'ingredient_id');
    }
}
