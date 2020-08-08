<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    public static $rules = array(
        'name' => 'required',
    );
}
