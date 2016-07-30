<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Param extends Model
{
    //
    public function spec()
    {
    	return $this->belongsTo("App\Spec");
    }
}
