<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarriageCertificatesTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('marriage_certificates', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('marriage_date');
			$table->string('location');
			$table->date('print_date');
			$table->integer('husband')->unsigned()->nullable();
			$table->foreign('husband')->references('id')
				->on('citizens')->onDelete('CASCADE')
				->onUpdate('CASCADE');
			$table->integer('wife')->unsigned()->nullable();
			$table->foreign('wife')->references('id')
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
		Schema::drop('marriage_certificates');
	}

}
