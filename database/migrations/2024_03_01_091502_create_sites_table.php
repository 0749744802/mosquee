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
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->string("nom_site")->nullable();
            $table->string("numero1_site")->nullable();
            $table->string("numero2_site")->nullable();
            $table->string("numero3_site")->nullable();
            $table->string("fixe1_site")->nullable();
            $table->string("fixe2_site")->nullable();
            $table->string("facebook_site")->nullable();
            $table->string("whatsapp_site")->nullable();
            $table->string("linkedin_site")->nullable();
            $table->string("google_site")->nullable();
            $table->string("tag_site")->nullable();
            $table->string("map_site")->nullable();
            $table->string("description_site")->nullable();
            $table->string("email1_site")->nullable();
            $table->string("email2_site")->nullable();
            $table->string("email3_site")->nullable();
            $table->string("logo_site")->nullable();
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
        Schema::dropIfExists('sites');
    }
};
