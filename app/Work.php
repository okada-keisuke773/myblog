<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
     protected $guarded = array('id');
     protected $table = 'profiles';
    public static $rules = array(
        'name' => 'required',
    );
}
