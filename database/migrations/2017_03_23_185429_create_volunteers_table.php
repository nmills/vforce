<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolunteersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('volunteers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('volunteers');
	}

}
