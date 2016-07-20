<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histoire', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre_histoire');
            $table->string('titre_realisation');
            $table->string('titre_service');
            $table->string('titre_produit');
            $table->text('img_url_guy');
            $table->text('img_url_denise');
            $table->text('description_histoire');
            $table->text('description_guy');
            $table->text('description_denise');
            $table->text('description_service');
            $table->text('description_produit');
            $table->text('description_realisation');
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
        Schema::drop('histoire');
    }
}
