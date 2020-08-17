<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work_histories extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'works_id' => 'required',
        'edited_at' => 'required',
    );
}
