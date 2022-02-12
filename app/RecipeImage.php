<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeImage extends Model
{
    //
    protected $guarded = array('id');

    public static $rules = array(
        'recipe_id' => 'required',
        'image_path' => 'required',
        'sort' => 'required'
         );
}
