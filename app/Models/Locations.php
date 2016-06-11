<?php

namespace shoes\Models;

use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    public $timestamps = true;
    public $table = 'locations';

    protected $fillable=['id','departamento','provincia','distrito'];

    public function user_detaill()
    {
    	return $this->hasMany('shoes\Model\User_details');
    }
}
