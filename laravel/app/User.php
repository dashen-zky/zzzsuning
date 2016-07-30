<?php

namespace App;

<<<<<<< HEAD
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
=======

use Illuminate\Database\Eloquent\Model;

use Illuminate\Auth\Authenticatable;
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
<<<<<<< HEAD
=======

    public function detail()
    {
        return $this->hasOne('App\Detail');
    }
    
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
<<<<<<< HEAD
=======

>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
}
