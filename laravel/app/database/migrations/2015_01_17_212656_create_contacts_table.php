<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(!Schema::hasTable('contacts')) 
		{
			Schema::create('contacts', function(Blueprint $table)
			{
				$table->increments('id');
				$table->string('first_name', 150);
				$table->string('last_name', 150);
				$table->date('birthday');
				$table->string('email', 150);
				$table->string('website', 150);
				$table->string('work_phone', 20);
				$table->string('home_phone', 20);
				$table->string('mobile_phone', 20);
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
		
	}

}
