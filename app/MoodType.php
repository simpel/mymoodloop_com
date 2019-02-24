<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class MoodType extends Model
{
    public function moods()
   	{
	   return $this->hasMany('App\Mood')->where('user_id', '=', Auth::id());
   	}

    public function all_moods()
   	{
	   return $this->hasMany('App\Mood');
   	}
}
