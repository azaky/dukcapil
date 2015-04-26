<?php namespace App\Http\Controllers;

use App\AktaNikah;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\KartuTandaPenduduk;
use App\Penduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class AktaCeraiController extends Controller {

    public function getIndex()
    {
        return view('pages.akta_cerai');
    }

    public function postBuat(){
        $nik_pria=Input::get('nik-pria');
        $nik_wanita=Input::get('nik-wanita');
        $no_akta_nikah=Input::get('no-akta-nikah');

        $akta_nikah=AktaNikah::find($no_akta_nikah);
        $nik_suami=DB::table('kartu_tanda_penduduk')->where('idPenduduk',$akta_nikah->suami)->first();
        $nik_istri=DB::table('kartu_tanda_penduduk')->where('idPenduduk',$akta_nikah->istri)->first();

        if($nik_suami->id==$nik_pria && $nik_istri->id==$nik_wanita){
            $penduduk_pria=Penduduk::find($akta_nikah->suami);
            $penduduk_pria->statusPernikahan="Belum Kawin";
            $penduduk_pria->save();
            $penduduk_wanita=Penduduk::find($akta_nikah->istri);
            $penduduk_wanita->statusPernikahan="Belum Kawin";
            $penduduk_wanita->save();
            $akta_nikah->delete();
            return redirect('/aktanikah');
        }
        else{
            return "ada yang salah noh";
        }
    }
}


