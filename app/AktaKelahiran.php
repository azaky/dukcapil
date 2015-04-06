<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class AktaKelahiran extends Model {

	//
    protected $table = 'akta_kelahir';

    protected $fillable = ['*'];

    protected $dates = ['waktuCetak'];
}
