<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attr extends Model
{
    public function type()
    {
    	return $this->belongsTo("App\Type");
    }

    public function attrvalue()
    {
    	return $this->hasMany("App\AttrValue");
    }
}
