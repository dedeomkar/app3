<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 
class enquiry extends Model
{  
	public function visits(){
		return $this->hasMany('App\visit');
	}
}
