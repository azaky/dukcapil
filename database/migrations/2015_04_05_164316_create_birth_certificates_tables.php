<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBirthCertificatesTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('birth_certificates', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('birth_location');
			$table->string('birth_time');
			$table->string('birth_type');
			$table->string('child_number');
			$table->string('birth_assister');
			$table->string('weight');
			$table->integer('informer_1')->unsigned()->nullable();
			$table->foreign('informer_1')->references('id')
				->on('citizens')->onDelete('CASCADE')
				->onUpdate('CASCADE');
			$table->integer('informer_2')->unsigned()->nullable();
			$table->foreign('informer_2')->references('id')
				->on('citizens')->onDelete('CASCADE')
				->onUpdate('CASCADE');
			$table->integer('informer_3')->unsigned()->nullable();
			$table->foreign('informer_3')->references('id')
				->on('citizens')->onDelete('CASCADE')
				->onUpdate('CASCADE');
			$table->integer('person')->unsigned();
			$table->foreign('person')->references('id')
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
		Schema::drop('birth_certificates');
	}

}
