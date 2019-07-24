<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 

class visit extends Model
{
    //
    public function enquiry(){
    	return $this->belongsTo('App\enquiry');
    }
}
