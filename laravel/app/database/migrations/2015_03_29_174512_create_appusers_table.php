<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppusersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(!Schema::hasTable('appusers')) 
		{
			Schema::create('appusers', function(Blueprint $table)
			{
				$table->increments('id');
				$table->string('name', 150);
				$table->string('username', 150);				
				$table->string('email', 150);
				$table->string('password', 128);
				$table->string('remember_token',100)->nullable();
				$table->timestamps();				
			});
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		if(Schema::hasTable('appusers')) {
			Schema::drop('appusers');
		}
	}

}
