<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilyRegisterCitizensMapTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('family_register_citizens_map', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('family_register_id')->unsigned()->nullable();
			$table->integer('citizen_id')->unsigned()->nullable();
			$table->foreign('family_register_id')->references('id')
				->on('family_registers')->onDelete('CASCADE')
				->onUpdate('CASCADE');
			$table->foreign('citizen_id')->references('id')
				->on('citizens')->onDelete('CASCADE')
				->onUpdate('CASCADE');
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
		Schema::drop('family_register_citizens_map');
	}

}
