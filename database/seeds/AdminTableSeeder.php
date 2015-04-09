<?php

use Illuminate\Database\Seeder;
class AdminTableSeeder extends Seeder{

	public function run()
	{

		\DB::table('users')->insert(array(

			'first_name'  => 'Billy',

			'last_name' => 'Andrys',
			
			'email' => 'billyandrys@gmail.com',

			'password' =>\Hash::make('12345'),



			 'type'	=> 'admin'



			));

		\DB::table('user_profiles')->insert(array(

							

				'user_id'  => 1,
				
				'birthdate' => '1988/03/08'

				 



			));



	}

}