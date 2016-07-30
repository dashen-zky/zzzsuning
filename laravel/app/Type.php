<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //
    public function good()
    {
    	return $this->hasMany("App\Good");
    }

    public function attr()
    {
    	return $this->hasMany("App\Attr");
    }

    public function attrvalue()
    {
    	return $this->hasManyThrough("App\AttrValue","App\Attr");
    }

    public function spec()
    {
        return $this->hasMany("App\Spec");
    }
}
