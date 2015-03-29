<?php


class LoginController extends \BaseController {

	public function getLogin() 
	{
		return View::make('login');
	}

	public function logout() 
	{
		Auth::logout();
		return Redirect::to('login');
	}

	public function processLogin() 
	{
		$rules = array('email' => 'required|email',
					   'password' => 'required|alphaNum|min:5' );

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('login')
					->withErrors($validator)
					->withInput(Input::except('password'));
		} else {
			$userdata = array(
        		'email'     => Input::get('email'),
        		'password'  => Input::get('password')
    		);

			if (Auth::attempt($userdata)) {
        		return Redirect::to('/');
    		} else {        
        		return Redirect::to('login');

    		}

		}

	}



}

