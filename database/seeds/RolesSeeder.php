<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		Role::truncate();
	 	DB::table('role_user')->truncate();

        $role_user = new Role();
		$role_user->name = 'User';
		$role_user->desc = 'En vanlig användare';
		$role_user->save();

		$role_admin = new Role();
		$role_admin->name = 'Admin';
		$role_admin->desc = 'En administratör';
		$role_admin->save();
	}
}
