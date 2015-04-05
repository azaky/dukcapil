<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeathCertificatesTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('death_certificates', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('death_date');
			$table->string('location');
			$table->date('print_date');
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
		Schema::drop('death_certificates');
	}

}
