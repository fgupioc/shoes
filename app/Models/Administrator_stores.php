<?php

namespace shoes\Models;

use Illuminate\Database\Eloquent\Model;

class Administrator_stores extends Model
{
    public $timestamps = true;

    protected $fillable = ['id','administrator_id','store_id'];

    protected $hidden = array('created_at', 'updated_at');

  
    public function administrator(){
        return $this->belongsTo('shoes\Models\Administrators','administrator_id');
    }

    public function store(){
        return $this->belongsTo('shoes\Models\Store','store_id');
    }
}
