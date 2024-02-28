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
        Schema::create('logiciels', function (Blueprint $table) {
            $table->id();
            $table->string("titre_logiciel")->nullable();
            $table->string("lien_logiciel")->nullable();
            $table->string("resume_logiciel")->nullable();
            $table->string("description_logiciel")->nullable();
            $table->string("public_logiciel")->nullable();
            $table->string("image_logiciel")->nullable();
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
        Schema::dropIfExists('logiciels');
    }
};
