<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use LaravelPropertyBag\Settings\HasSettings;

class User extends Authenticatable
{
    use Notifiable;
    use HasSettings;

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
