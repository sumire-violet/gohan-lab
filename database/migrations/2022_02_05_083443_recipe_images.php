<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecipeImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('recipe_images', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('recipe_id');
            $table->string('image_path')->nullable();
            $table->integer('sort');
            //以下、recipesテーブルのIDと連携
            $table->foreign('recipe_id') 
                  ->references('id')
                  ->on('recipes')
                  ->onDelete('cascade');
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
         Schema::dropIfExists('recipe_images');
    }
}
