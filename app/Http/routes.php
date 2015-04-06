<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// TODO: remove this part.
/*Route::get('/aktacerai', function() {
    return view('pages.akta_cerai');
});
Route::get('/aktakelahiran', function() {
    return view('pages.akta_kelahiran');
});
Route::get('/aktakematian', function() {
    return view('pages.akta_kematian');
});
Route::get('/aktanikah', function() {
    return view('pages.akta_nikah');
});
Route::get('/kartukeluarga', function() {
    return view('pages.kartu_keluarga');
});
Route::get('/kartutandapenduduk', function() {
    return view('pages.kartu_tanda_penduduk');
});
*/
Route::controller('aktakelahiran','AktaKelahiranController');