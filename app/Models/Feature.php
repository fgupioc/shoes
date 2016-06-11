<?php

namespace shoes\Models;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    public $timestamps = true;

    protected $fillable = ['id','name','state'];

    public function store_feature(){
        return $this->hasMany('shoes\Models\Store_features','feature_id');
    }
}
