<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccueilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accueil', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre');
            $table->string('titre_img1');
            $table->string('img1');
            $table->string('titre_img2');
            $table->string('img2');
            $table->string('titre_img3');
            $table->string('img3');
            $table->string('titre_img4');
            $table->string('img4');
            $table->string('titre_img5');
            $table->string('img5');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('accueil');
    }
}
