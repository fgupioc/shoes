<?php

namespace shoes\Models;

use Illuminate\Database\Eloquent\Model;

class Administrator_institutions extends Model
{

    protected $fillable = ['id','administrator_id','institution_id'];


    public function administrator(){
        return $this->belongsTo('shoes\Models\Administrators','administrator_id');
    }

    public function institution(){
        return $this->belongsTo('shoes\Models\Institution','institution_id');
    }
}
