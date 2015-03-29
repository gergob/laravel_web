<?php

class AppusersTableSeeder extends Seeder
{

	public function run()
	{
	    DB::table('appusers')->delete();
	    User::create(array(
	        'name'     => 'John Doe',
	        'username' => 'johndoe',
	        'email'    => 'john@doe.com',
	        'password' => Hash::make('laravel'),
	    ));

	    User::create(array(
	        'name'     => 'Jane Doe',
	        'username' => 'janedoe',
	        'email'    => 'jane@doe.com',
	        'password' => Hash::make('laravel1234'),
	    ));
	}

}