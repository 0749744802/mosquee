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
        Schema::create('devis', function (Blueprint $table) {
            $table->id();
            $table->string("personne_devis")->nullable();
            $table->string("domaine_devis")->nullable();
            $table->string("numero_devis")->nullable();
            $table->string("pays_devis")->nullable();
            $table->string("ville_devis")->nullable();
            $table->string("adresse_devis")->nullable();
            $table->string("nom_devis")->nullable();
            $table->string("numeroc_devis")->nullable();
            $table->string("emailc_devis")->nullable();
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
        Schema::dropIfExists('devis');
    }
};
