<?php

namespace shoes\Models;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
       public $timestamps = true;

    protected $fillable=['id','name','description'];

    public function product(){
    	return $this->belongsto('shoes\Models\Product');
    }
}
