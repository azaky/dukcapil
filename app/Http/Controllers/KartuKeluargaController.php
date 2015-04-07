<?php namespace App\Http\Controllers;

use App\KartuKeluarga;
use App\AktaKelahiran;
use App\Http\Requests;
use Carbon\Carbon;
use Illuminate\Support\Facades\Request;

class KartuKeluargaController extends Controller {

    public function getIndex()
    {
        return view('pages.kartu_keluarga');
    }

    public function postCreate()
    {
        // create a new instance of KartuKeluarga
        $kartuKeluarga = new KartuKeluarga();
        $kartuKeluarga->kepalaKeluarga = Request::input('kepalaKeluarga'); // TODO: reference this from KTP
        $kartuKeluarga->kodepos = Request::input('kodepos');
        $kartuKeluarga->alamat = Request::input('alamat');
        $kartuKeluarga->provinsi = Request::input('provinsi');
        $kartuKeluarga->kota = Request::input('kota');
        $kartuKeluarga->kecamatan = Request::input('kecamatan');
        $kartuKeluarga->kelurahan = Request::input('kelurahan');
        $kartuKeluarga->status = Request::input('status', 'true');
        $kartuKeluarga->waktuCetak = Carbon::now();
        $kartuKeluarga->generateId();
        $kartuKeluarga->save();

//        $table->increments('id');
//        $table->string('nama');
//        $table->string('agama')->nullable();
//        $table->string('kewarganegaraan');
//        $table->string('pendidikan')->nullable();
//        $table->string('jenisKelamin');
//        $table->string('tempatLahir');
//        $table->datetime('waktuLahir');
//        $table->string('statusPernikahan')->nullable();
//        $table->string('pekerjaan')->nullable();
//        $table->integer('ayah')->unsigned()->nullable();
//        $table->foreign('ayah')->references('id')
//            ->on('penduduk');
//        $table->integer('ibu')->unsigned()->nullable();
//        $table->foreign('ibu')->references('id')
//            ->on('penduduk');
//        $table->timestamps();
//        dd(Request::all());
        $n = count(Request::input('nama'));
        for ($i = 0; $i < $n; ++$i) {
            $penduduk = AktaKelahiran::find(Request::get('kodeAktaLahir')[$i])->penduduk;
            $penduduk->update([
                'jenisKelamin' => Request::input('jenisKelamin' . $i),
                'golonganDarah' => Request::input('golonganDarah' . $i),
                'pendidikan' => Request::input('pendidikan' . $i),
                'pekerjaan' => Request::input('pekerjaan' . $i),
            ]);
            dd($penduduk);
        }
        dd(Request::all());
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
