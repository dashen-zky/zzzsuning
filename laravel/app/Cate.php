<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    //
    public function good()
    {
    	return $this->hasMany("App\Good");
    }

    public function brand(){
    	return $this->hasMany("App\Brand");
    } 
}
