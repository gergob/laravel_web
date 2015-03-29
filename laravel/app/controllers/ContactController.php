<?php

class ContactController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if(Auth::check())
		{
			return View::make('index');
		}
		else 
		{
			return Redirect::to('login');
		}
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		if(Auth::check())
		{
			return View::make('add_contact');
		}
		else 
		{
			return Redirect::to('login');
		}
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if(Auth::check())
		{
			//
			//do validation
			//
			$validation_rules = array(
				'first_name' => array('required','min:3', 'max:200'),
				'last_name' => array('required','min:3', 'max:200'),
				'email' => array('required','min:5', 'max:200')
			);

			$validator = Validator::make(Input::all(), $validation_rules);

			if($validator->fails()) {
				return Redirect::route('add_contacts')->withErrors($validator)->withInput();
			}

			//
			// store the contact
			//

			$new_contact = new Contact;

			$new_contact->first_name = Input::get('first_name');
			$new_contact->last_name = Input::get('last_name');
			$new_contact->birthday = Input::get('birthday');
			$new_contact->email = Input::get('email');
			$new_contact->website = Input::get('website');
			$new_contact->work_phone = Input::get('work_phone');
			$new_contact->home_phone = Input::get('home_phone');
			$new_contact->mobile_phone = Input::get('mobile_phone');

			$new_contact->save();

			return Redirect::route('contacts');
		}
		else 
		{
			return Redirect::to('login');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//return View::make('contacts');
	}

	public function showAll()
	{
		if(Auth::check())
		{
			$all_contacts = Contact::all();
			return View::make('contacts')->with('all_contacts', $all_contacts);	
		}
		else 
		{
			return Redirect::route('login');
		}
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
