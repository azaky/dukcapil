<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilyRegistersTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('family_registers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('head_of_family')->unsigned();
			$table->foreign('head_of_family')->references('id')
				->on('citizens')->onDelete('CASCADE')
				->onUpdate('CASCADE');
			$table->string('zip_code');
			$table->string('address');
			$table->string('province');
			$table->string('regency');
			$table->string('subdistrict');
			$table->string('village');
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
		Schema::drop('family_registers');
	}

}
