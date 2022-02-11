<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FavoriteRecipe extends Model
{
    //
    protected $guarded = array('id');

    public static $rules = array(
        'recipe_id' => 'required',
         );
}
