<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
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
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['tipod','identificacion','nombre','telefonor','direccionr','nombre_negocio','email', 'user', 'password', 'tipo', 'active'];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function scopeNombre($query, $nombre)
    {

     $query->where('nombre',"LIKE","%$nombre%")
           ->orWhere("email","like","%$nombre%")
           ->orWhere("user","like","%$nombre%")
        ->orWhere("identificacion","like","%$nombre%");



    }
    // Relation with Orders
       public function orders()
       {
           return $this->hasMany('App\Order');
       }
}
