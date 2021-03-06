<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mood extends Model
{
	public function comments()
   	{
	   return $this->hasMany('App\MoodComment');
   	}

	public function traits()
   	{
	   return $this->hasMany('App\MoodTrait');
   	}
}
