<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function cate()
    {
    	return $this->belongsTo("App\Cate");
    }
}
