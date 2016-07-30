<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spec extends Model
{
    //
    public function type()
    {
    	return $this->belongsTo("App\Type");
    }

    public function specvalue()
    {
    	return $this->hasMany("App\SpecValue");
    }
}
