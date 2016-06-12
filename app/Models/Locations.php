<?php

namespace shoes\Models;

use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    public $timestamps = true;
    public $table = 'locations';

    protected $fillable=['id','department','province','district'];

    public function user_detaill()
    {
    	return $this->hasMany('shoes\Models\User_details','location_id');
    }
    
    public function institution(){
        return $this->hasMany('shoes\Models\Institution','location_id');
    }
}
