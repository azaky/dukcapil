<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveEnglishTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::drop('family_register_citizens_map');
        Schema::drop('government_employees');
        Schema::drop('identity_cards');
        Schema::drop('family_registers');
        Schema::drop('death_certificates');
        Schema::drop('birth_certificates');
        Schema::drop('marriage_certificates');
        Schema::drop('citizens');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// unfortunately we are unable to recreate the tables :(
        // rerun the old migrations when needed
	}

}
