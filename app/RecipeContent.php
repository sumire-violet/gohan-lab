<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeContent extends Model
{
    //
    protected $guarded = array('id');

    public static $rules = array(
        'recipe_id' => 'required',
        'step' => 'required',
        'sort' => 'required',
    );
}
