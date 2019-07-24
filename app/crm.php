<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class crm extends Model
{
    protected $fillable = [
		'name', 'pitch', 'price', 'priceOp', 'features', 'deploy', 'exFea',
    ];

}