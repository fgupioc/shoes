<?php

namespace shoes\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //protected $table ='productos';
    public $timestamps = true;

    protected $fillable=['id','name','price','marca_id'];

    public function mark(){
    	return $this->hasmany('shoes\Models\Mark');
    }
}
