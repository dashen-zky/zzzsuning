<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    //
    public function good()
    {
    	return $this->belongsTo("App\Good");
    }

    public function pic()
    {
    	return $this->hasMany("App\Pic");
    }
}
