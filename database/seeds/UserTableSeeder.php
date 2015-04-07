<?php

use Illuminate\Database\Seeder;
class UserTableSeeder extends Seeder{

	public function run()
	{

		\DB::table('users')->insert(array(

			'name'  => 'BillyAndrys',

			'email' => 'billyandrys@gmail.com',

			'password' =>\Hash::make('12345') 	



			));
	}

}