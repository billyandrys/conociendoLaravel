<?php namespace coursee\Http\Controllers\Admin;

use coursee\Http\Requests;
use coursee\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use coursee\Http\Requests\CreateUserRequest;
use coursee\Http\Requests\EditUserRequest;
use Illuminate\Support\Facades\Session;
use coursee\User;


class UsersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	protected $request;
	

	public function __construct(Request $request)
	{
		$this->request = $request;
	}
	public function index()
	{
		$users = User::paginate();
		return view('admin.users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function create()
	{
		return view('admin.users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store( CreateUserRequest $request)
	{
		

		$data = $this->request->all();
			

		$user = User::create($data);
		

		return redirect()->route('admin.users.index');

	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::findOrFail($id);

		return view('admin.users.edit', compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, EditUserRequest $request)
	{
		$user = User::findOrFail($id);
		$user->fill($this->request->all());
		$user->save();
		return redirect()->route('admin.users.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
			
			User::destroy($id);

			$message = 'registro fuel eliminado';

			if($this->request->ajax()){
				
				return response()->json([

					'id' => $id,
					'message' => $message


			]);
	}
			


			

				

			Session::flash('message'. $message);

			//return redirect()->route('admin.users.index');


	}

}
