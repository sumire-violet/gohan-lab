<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecipeContents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('recipe_contents', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('recipe_id');
            $table->text('step');
            $table->integer('sort');
            //以下、recipesテーブルのidと連携
            $table->foreign('recipe_id') 
                  ->references('id')
                  ->on('recipes')
                  ->onDelete('cascade');
            });
        }
        /**/
    public function down()
    {
        //
         Schema::dropIfExists('recipe_contents');
    }
}
