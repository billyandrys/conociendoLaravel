<?php namespace coursee\Http\Requests;

use coursee\Http\Requests\Request; 
use Iluminate\Routing\Route;


class EditUserRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */

	private $route;

	public function __construct(Route $route)
	{
		$this->route = $route;	
	}


	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'first_name' => 'required',
			'last_name'=> 'required',
			'email'=> 'required|unique:users,email,'. $this->getParameter('users'),
			'password'=> 'required',
			'type'=> 'required'
		];
	}

}
