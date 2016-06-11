<?php

namespace shoes\Models;

use Illuminate\Database\Eloquent\Model;

class Store_features extends Model
{

    public $timestamps = true;

    protected $fillable = ['id','store_id','feature_id','description','state'];
 

    public function feature(){
        return $this->belongsTo('shoes\Models\Feature','feature_id');
    }

    public function store(){
        return $this->belongsTo('shoes\Models\Store','store_id');
    }
}
