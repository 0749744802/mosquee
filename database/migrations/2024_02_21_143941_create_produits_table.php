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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
              // migration de cle etranger
              $table->unsignedBigInteger('categorie_produit_id');
              $table->foreign('categorie_produit_id')->references('id')->on('categorie_produits');
              $table->string("titre_produit")->nullable();
              $table->string("public_produit")->nullable();
              $table->string("stock_produit")->nullable();
              $table->string("prix_produit")->nullable();
              $table->string("reduction_produit")->nullable();
              // migration de cle etranger
              $table->unsignedBigInteger('appreciation_produit_id');
              $table->foreign('appreciation_produit_id')->references('id')->on('appreciation_produits');
              $table->string("resume_produit")->nullable();
              $table->string("description_produit")->nullable();
              $table->string("image_produit")->nullable();


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
        Schema::dropIfExists('produits');
    }
};
