<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValuationType extends Model
{
	public function options()
   	{
	   return $this->hasMany('App\ValuationValue');
   	}
}
