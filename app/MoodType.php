<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MoodType extends Model
{
    public function moods()
   	{
	   return $this->hasMany('App\Mood');
   	}
}
