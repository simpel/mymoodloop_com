<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MoodTrait extends Model
{

    protected $table = 'mood_traits';

    public function mood()
   	{
	   return $this->belongsTo('App\MoodType');
   	}
}
