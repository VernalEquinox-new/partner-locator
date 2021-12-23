<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocStateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('loc_state', function(Blueprint $table)
		{
			$table->increments('state_id');
			$table->string('name');
			$table->string('short_name', 50)->nullable();
			$table->integer('country_id')->unsigned()->index('country_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('loc_state');
	}

}
