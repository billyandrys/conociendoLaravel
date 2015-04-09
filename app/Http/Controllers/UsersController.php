<?php namespace coursee\Http\Controllers;

use coursee\User;

class UsersController extends Controller {


	public function getOrm()
	{
		$result = User::get();
		dd($result->profile->age);

	}


	public function getIndex()
	{
		$resul = \DB::table('users')
		->select('users.*',
				'user_profiles.id as profile_id',
				'user_profiles.twitter'

			)
		
		->orderBy(\DB::raw('RAND()'))
		->leftJoin('user_profiles', 'users.id', '=', 'user_profiles.user_id')
		->get();

		//dd($resul->first_name);
		//return $resul;
	}

}	
