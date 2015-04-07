<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		 $this->call('PendudukTableSeeder');
	}

}

class PendudukTableSeeder extends Seeder {
    public function run()
    {
        Model::unguard();

//        $table->increments('id');
//        $table->string('nama');
//        $table->string('agama')->nullable();
//        $table->string('kewarganegaraan');
//        $table->string('pendidikan')->nullable();
//        $table->string('jenisKelamin');
//        $table->string('tempatLahir');
//        $table->datetime('waktuLahir');
        \App\Penduduk::create([
            'nama' => 'Wono',
            'kewarganegaraan' => 'wni',
            'jenisKelamin' => 'L',
            'tempatLahir' => 'Wonosobo',
            'waktuLahir' => \Carbon\Carbon::now()
        ]);
    }
}