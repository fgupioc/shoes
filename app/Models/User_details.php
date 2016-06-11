<?php

namespace shoes\Models;

use Illuminate\Database\Eloquent\Model;

class User_details extends Model
{
   public $timestamps = true;
   // Textos completos	
 	protected $table = 'user_details';
	protected $fillable = ['id','gender','type_document','number_document','birthday
','address','photo','phone','cell','location_id','user_id'];

 
	public function user(){
		return $this->belongsTo('shoes\User');
	}

	public function location(){
		return $this->belongsTo('shoes\Models\Locations');
	}
}
