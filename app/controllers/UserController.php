<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		Session::clear();
		return View::make('user.create')
            ->with('hcode',CommonCode::where('hcode','=','CA01')->where('code','!=','*')->get())
			->with('plant',CommonCode::where('hcode','=','CA02')->where('code','!=','*')->get())
            ->with('tabs',CommonCode::where('code','LIKE','%'.'B2'.'%')->where('hcode','=','ITP')->where('code','!=','*')->get())
            ->with('customers',User::all());
	}

	public function getCode($code){
		Session::put('code',$code);
		$company = CommonCode::where('code','=','10')->get();
		foreach ($company as $cmp) {
			$company = $cmp->code;
		}
		return View::make('user.create')
			->with('hcode',CommonCode::where('hcode','=','CA01')->where('code','!=','*')->get())
			->with('plant',CommonCode::where('hcode','=','CA02')->where('code','!=','*')->get())
			->with('tabs',CommonCode::where('code','LIKE','%'.'B2'.'%')->where('hcode','=','ITP')->where('code','!=','*')->get())
			->with('company',$company)
			->with('customers',User::where('plant','=',1010)->where('emp_ktg','=',Session::get('code'))->get());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function postCreate()
	{
		$validator = Validator::make(Input::all(), [
            'company' => 'required',
            'plant' => 'required',
            'employee_code' => 'required',
            'employee_name' => 'required',
            'email' => 'required',
            'password'=> 'required|min:3',
            'viewer' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/users')
                ->withErrors($validator)
                ->withInput();
        }
        else {
            $user = new User();
            $user->company = Input::get('company');
            $user->plant = Input::get('plant');
            $user->email = Input::get('email');
            $user->employee_code = Input::get('employee_code');
            $user->employee_name = Input::get('employee_name');
            $user->password = Hash::make(Input::get('password'));
            $user->viewer = Input::get('viewer');
            $user->save();

            return Redirect::to('/users');
        }
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
