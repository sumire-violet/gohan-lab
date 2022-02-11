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
        Schema::create('recipes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id'); 
            $table->string('name'); 
            $table->integer('cooking_time');
            $table->text('note');
            $table->integer('number_of_serving');
            $table->string('image_path')->nullable(); 
            $table->timestamps();
            //以下、categoriesテーブルのidと連携
            $table->foreign('category_id') 
                  ->references('id')
                  ->on('categories')
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
         Schema::dropIfExists('recipes');
    }
}
