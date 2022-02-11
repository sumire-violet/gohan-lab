<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    protected $guarded = array('id');

    public static $rules = array(
        'e-mail' => 'required',
        'password' => 'required',
    );
}
