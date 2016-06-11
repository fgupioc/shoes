<?php

namespace shoes\Models;

use Illuminate\Database\Eloquent\Model;

class Administrators extends Model
{
    public $timestamps = true;
// Textos completos	
 
    protected $table = 'administrators';
     protected $primarykey = 'id';
	protected $fillable = ['id','user_id','type_admin_id','state'];

	public function type_admin(){ 
		return $this->belongsTo('shoes\Models\Type_admins','type_admin_id');
	}

	public function user(){
		return $this->belongsTo('shoes\User', 'user_id');		
	}
	public function administrator_store(){
		return $this->hasMany('shoes\Models\Administrator_stores','administrator_id');
	}
	public function administrator_institution(){
		return $this->hasMany('shoes\Models\Administrator_institutions','administrator_id');
	}
	
}
