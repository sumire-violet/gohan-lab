<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $guarded = array('id');

    public static $rules = array(
        'title' => 'required',
        'text' => 'required',
    );
}
