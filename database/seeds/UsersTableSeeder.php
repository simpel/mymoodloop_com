<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		$role_user = Role::where('name', 'User')->first();
		$role_admin = Role::where('name', 'Admin')->first();

		User::truncate();

		$user = new User();
		$user->firstname = 'User';
		$user->lastname = 'Ipsum';
		$user->email = 'joel.sanden@regionhalland.se';
		$user->password = bcrypt('secret');
		$user->save();
		$user->roles()->attach($role_user);

		$admin = new User();
		$admin->firstname = 'Admin';
		$admin->lastname = 'Ipsum';
		$admin->email = 'me@joelsanden.se';
		$admin->password = bcrypt('secret');
		$admin->save();
		$admin->roles()->attach($role_admin);

    }
}
