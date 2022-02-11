<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    //
     protected $guarded = array('id');

    public static $rules = array(
        'category_id' => 'required',
        'name' => 'required',
        'cooking_time' => 'required',
        'number_of_serving' => 'required',
         );
}
