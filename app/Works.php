<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Works extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'name' => 'required',
        'description' => 'required',
    );

    public function histories(){
        return $this->hasMany('App\Work_histories');
    }
}
