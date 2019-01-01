<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;

class User extends Authenticatable
{
    use Notifiable;

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

	public function roles() {
		return $this->belongsToMany('App\Role');
	}

	public function hasAnyRole($roles) {
		if(is_array($roles)) {
			foreach ($roles as $role) {
				if ($this->hasRole($role)) {
					return true;
				}
			}
		} else {
			if ($this->hasRole($roles)) {
				return true;
			}
		}

		return false;
	}

	public function hasRole($role) {
		if ($this->roles()->where('name', $role)->first()) {
			return true;
		}

		return false;
	}
}
