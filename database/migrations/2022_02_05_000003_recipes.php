<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Recipes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe', function (Blueprint $recipe) {
            $table->bigIncrements('recipe_id');
            $table->string('recipe_name'); 
            $table->string('category_id');  
            $table->string('cooking_time');
            $table->string('supplement');
            $table->string('yield_serving');
            $table->string('image_path')->nullable(); 
            $table->timestamps();
            //以下、category_mastersテーブルのcategory_idと連携
            $table->foreign('category_id') 
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
    }
}
