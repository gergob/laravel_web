<?php

class ContactController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('add_contact');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
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
		$all_contacts = Contact::all();
		return View::make('contacts')->with('all_contacts', $all_contacts);	
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
