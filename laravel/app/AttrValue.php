<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttrValue extends Model
{
    public function attr()
    {
    	return $this->belongsTo("App\Attr");
    }
}
