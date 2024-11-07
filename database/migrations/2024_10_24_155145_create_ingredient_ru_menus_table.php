<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ingredient_menus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ingredient_id');
            $table->unsignedBigInteger('menu_id');

            $table->index('ingredient_id', 'ingredient_menu_ingredient_idx');
            $table->index('menu_id', 'ingredient_menu_menu_idx');

            $table->foreign('ingredient_id', 'ingredient_menu_ingredient_fk')->on('ingredients')->references('id');
            $table->foreign('menu_id', 'ingredient_menu_menu_fk')->on('menus')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingredient_menus');
    }
};
