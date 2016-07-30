<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    //
    public function cate()
    {
    	return $this->belongsTo("App\Cate");
    }

    public function brand()
    {
    	return $this->belongsTo("App\Brand");
    }


	public function type()
    {
    	return $this->belongsTo("App\Type");
    }

    public function image()
    {
    	return $this->hasMany("App\Image");
    }

    public function store()
    {
        return $this->hasMany("App\Store");
    }
}
