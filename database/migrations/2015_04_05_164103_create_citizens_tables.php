<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitizensTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('citizens', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('religion');
			$table->string('nationality');
			$table->string('education');
			$table->string('gender');
			$table->string('place_of_birth');
			$table->date('birth_date');
			$table->string('marriage_status')->nullable();
			$table->string('job')->nullable();
			$table->integer('father')->unsigned()->nullable();
			$table->foreign('father')->references('id')
				->on('citizens');
			$table->integer('mother')->unsigned()->nullable();
			$table->foreign('mother')->references('id')
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
		Schema::drop('citizens');
	}

}
