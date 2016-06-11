<?php

namespace shoes\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public $timestamps = true;

    protected $fillable = ['id','name','description','address','location_id','institution_id','latitude', 'length', 'phone','state'];

    public function institution(){
        return $this->belongsTo('shoes\Models\Institution','institution_id');
    }

    public function location(){
        return $this->belongsTo('shoes\Models\Locations','location_id');
    }
    public function admin_store()
    {
        return $this->hasMany('shoes\Models\Administrator_stores','store_id');
    }
    public function Store_feature(){
        return $this->hasMany('shoes\Models\Store_features','store_id');
    }

}
