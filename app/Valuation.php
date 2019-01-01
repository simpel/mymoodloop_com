<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Valuation extends Model
{
	public function comments()
   	{
	   return $this->hasMany('App\ValuationComment');
   	}
}
