<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnerLocatorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('partner_locator', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('company');
			$table->string('status');
			$table->string('logo');
			$table->string('address');
			$table->string('website');
			$table->string('phone', 40);
			$table->string('countries_covered', 1000);
			$table->string('states_covered', 1000);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('partner_locator');
	}

}
