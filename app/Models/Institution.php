<?php

namespace shoes\Models;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    public $timestamps = true;

    protected $fillable = ['id','name','address','ruc','phone','email', 'logo','state','location_id','contact'];


    public function location(){
        return $this->belongsTo('shoes\Models\Location','location_id');
    }

    public function store(){
        return $this->hasMany('shoes\Models\Store','institution_id');
    }

    public function administrator_institution()
    {
        return $this->hasMany('shoes\Models\Administrator_institutions','institution_id');
    }
}
