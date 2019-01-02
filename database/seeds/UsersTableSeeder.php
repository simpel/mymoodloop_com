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



		User::truncate();

		$user = new User();
		$user->firstname = 'User';
		$user->lastname = 'Ipsum';
		$user->slug = str_slug($user->firstname.' a '.$user->lastname, '-');
		$user->email = 'joel.sanden@regionhalland.se';
		$user->password = bcrypt('secret');
		$user->save();


		$admin = new User();
		$admin->firstname = 'Admin';
		$admin->lastname = 'Ipsum';
		$admin->slug = str_slug($admin->firstname.' v '.$admin->lastname, '-');
		$admin->email = 'me@joelsanden.se';
		$admin->password = bcrypt('secret');
		$admin->save();

    }
}
