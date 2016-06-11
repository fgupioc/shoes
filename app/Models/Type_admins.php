<?php

namespace shoes\Models;

use Illuminate\Database\Eloquent\Model;

class Type_admins extends Model
{
	protected $table = 'type_admins';
    public $timestamps = true;

	protected $fillable = ['id','abreviado','name'];

	public function administrator(){
		return $this->hasone('shoes\Models\Administrators'.'type_admin_id');
	}
}
