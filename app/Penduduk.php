<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model {

	//
    protected $table = 'penduduk';

    protected $fillable = ['*'];

    protected $date = ['waktuLahir'];

    public function aktaKelahiran()
    {
        return $this->hasOne('App\AktaKelahiran', 'idPenduduk');
    }
}
