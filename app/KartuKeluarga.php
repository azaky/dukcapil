<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class KartuKeluarga extends Model {

	//
    protected $table = 'kartu_keluarga';

    protected $fillable = ['*'];

    protected $dates = ['waktuCetak'];

    // TODO: generate Id
    public function generateId() {
        $this->id = KartuKeluarga::all()->count() + 1;
    }

}
