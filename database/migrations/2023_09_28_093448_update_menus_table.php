<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('menus', function (Blueprint $table) {
            $table->dropColumn(['created_at', 'updated_at', 'ingredient']);
            $table->string('ingr_1');
            $table->string('ingr_2');
            $table->string('ingr_3');
            $table->string('ingr_4');
            $table->string('ingr_5');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
