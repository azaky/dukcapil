<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdentityCardsTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('identity_cards', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('expiration_date');
			$table->date('print_date');
			$table->integer('citizen_id')->unsigned();
			$table->foreign('citizen_id')->references('id')
				->on('citizens');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('identity_cards');
	}

}
