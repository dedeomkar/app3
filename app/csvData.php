<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class csvData extends Model
{
    //
    protected $fillable = [
    	'csv_filename', 'csv_header', 'csv_data'
    ];
}
