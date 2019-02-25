<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use LaravelPropertyBag\Settings\HasSettings;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class User extends Authenticatable
{
    use Notifiable;
    use HasSettings;
    use HasSlug;

   /**
    * Get the options for generating the slug.
    */
   public function getSlugOptions() : SlugOptions
   {
       return SlugOptions::create()
           ->generateSlugsFrom(['first_name', 'last_name'])
           ->doNotGenerateSlugsOnUpdate()
           ->saveSlugsTo('slug');
   }

    protected $fillable = [
        'firstname', 'lastname', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

	public function getNameAttribute()
	{
    	return "{$this->firstname} {$this->lastname}";
	}
}
