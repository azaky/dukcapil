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
        Schema::create('family_register_citizens_map', function(Blueprint $table) {$table->increments('id');});
        Schema::create('government_employees', function(Blueprint $table) {$table->increments('id');});
        Schema::create('identity_cards', function(Blueprint $table) {$table->increments('id');});
        Schema::create('family_registers', function(Blueprint $table) {$table->increments('id');});
        Schema::create('death_certificates', function(Blueprint $table) {$table->increments('id');});
        Schema::create('birth_certificates', function(Blueprint $table) {$table->increments('id');});
        Schema::create('marriage_certificates', function(Blueprint $table) {$table->increments('id');});
        Schema::create('citizens', function(Blueprint $table) {$table->increments('id');});
	}

}
