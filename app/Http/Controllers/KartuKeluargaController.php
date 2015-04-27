<?php namespace App\Http\Controllers;

use App\KartuKeluarga;
use App\AktaKelahiran;
use App\Http\Requests;
use App\Penduduk;
use Carbon\Carbon;
use Illuminate\Support\Facades\Request;

class KartuKeluargaController extends Controller {

    public function getIndex()
    {
        return view('pages.kartu_keluarga_new');
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

        $n = count(Request::input('nama'));
        for ($i = 0; $i < $n; ++$i) {
            $penduduk = AktaKelahiran::find(Request::input('kodeAktaLahir')[$i])->penduduk;
            $penduduk->jenisKelamin = Request::input('jenisKelamin')[$i];
            $penduduk->golonganDarah = Request::input('golonganDarah')[$i];
            $penduduk->pendidikan = Request::input('pendidikan')[$i];
            $penduduk->pekerjaan = Request::input('pekerjaan')[$i];
            $penduduk->save();

            // create relationships
            $penduduk->kartuKeluarga()->attach($kartuKeluarga->id, ['status' => Request::input('status', ['Kepala Keluarga'])[$i]]);
        }

        return view('pages.lihat_kartu_keluarga');
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
