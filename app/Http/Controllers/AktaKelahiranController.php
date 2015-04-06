<?php namespace App\Http\Controllers;

use App\AktaKelahiran;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Penduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;

class AktaKelahiranController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		//
        return view('pages.akta_kelahiran');
	}

    /**
     *
     */
    public function postBuat()
    {
        $penduduk = new Penduduk();
        $penduduk->nama = Input::get("nama");
        $penduduk->kewarganegaraan = "wni";
        $penduduk->jenisKelamin = Input::get("jenisKelamin");
        $penduduk->tempatLahir = Input::get("tempatLahir");
        $penduduk->waktuLahir = Carbon::parse(Input::get("tanggalLahir")." ".Input::get("jamLahir"));
        if ( $penduduk->save())
        {
            $aktalahir = new AktaKelahiran();
            $aktalahir->idPenduduk = $penduduk->id;
            if ($aktalahir->save())
            {
                return "masuk";
            }
        }
        return "gagal";
    }
}
