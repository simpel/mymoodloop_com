<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValuationComment extends Model
{
	public function valuation()
   	{
	   return $this->belongsTo('App\Valuation');
   	}
}
