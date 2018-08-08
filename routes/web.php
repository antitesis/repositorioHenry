<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'ServicioController@show');

route::group(['prefix' => 'n1md9'], function()
{
	Route::resource('perfils','PerfilController');
	Route::resource('sedes','SedeController');
	Route::resource('servicios','ServicioController');
	Route::resource('srvvideotutoriales','SrvvideotController');
	Route::resource('usuarios','UserController');
	Route::resource('perfilesservicios','PerfilServicioController');
	Route::resource('notas','NotaController');

	Route::get('perfils/{id}/destroy',[
		'uses' => 'PerfilController@destroy',
		'as' => 'admin.perfils.destroy'
	]);

	Route::get('sedes/{id}/destroy',[
		'uses' => 'SedeController@destroy',
		'as' => 'admin.sedes.destroy'
	]);

	Route::get('servicios/{id}/destroy',[
		'uses' => 'ServicioController@destroy',
		'as' => 'admin.servicios.destroy'
	]);

	Route::get('usuarios/{id}/destroy',[
		'uses' => 'UserController@destroy',
		'as' => 'admin.users.destroy'
	]);

	Route::get('notas/{id}/destroy',[
		'uses' => 'NotaController@destroy',
		'as' => 'admin.notas.destroy'
	]);

	Route::get('srvvideotutoriales/{id}/destroy',[
		'uses' => 'SrvvideotController@destroy',
		'as' => 'admin.srvvideotutoriales.destroy'
	]);
});

route::group(['prefix' => 'servicios'],function()
{
	Route::get('videotutoriales', 'SrvvideotController@show');
}
);

Auth::routes();

Route::get('/home', 'HomeController@indexuser')->name('home');
Route::get('/n1md9', 'HomeController@indexadmin')->name('n1md9');


