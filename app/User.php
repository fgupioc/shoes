<?php

namespace shoes;  
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

    use Authenticatable, CanResetPassword;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'users';
    protected $primarykey = 'id';
    protected $fillable = [
    'id','name', 'email', 'password','first_name','last_name','active','state','subscription'
    ]; 
    protected $hidden = [
    'password', 'remember_token',
    ];

    public function administrador(){  
         return $this->hasone('shoes\Models\Administrators', 'user_id');
    }

    public function user_detall()
    {

        return $this->hasMany('shoes\Models\User_details');
    }

}
