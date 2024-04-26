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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
             // Set foreign key constraints
             $table->unsignedBigInteger('menu_principale_id');
             $table->foreign('menu_principale_id')->references('id')->on('menu_principales');
            $table->string("sous_menu")->nullable();
            $table->string("ordre_menu")->nullable();
            $table->string("public_menu")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
};
