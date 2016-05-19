<?php

class LoginController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function auth()
	{
		return View::make('pages.login');
	}
	public function postAuth(){
		
		if (Auth::attempt(array('employee_code'=>Input::get('employee_code'),'password'=>Input::get('password')))) {

			return Redirect::to('/beranda')->with('message','Selamat Datang di Halaman Admin.');
		}

		return Redirect::to('/')->with('message','Employee Code atau Password Salah!!');
	}

	public function getLogout(){
		Auth::logout();
		return Redirect::to('/');
	}
}
