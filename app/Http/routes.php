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

Route::get('/', 'UsersController@index');
Route::post('add-user', ['as' => 'addUser', 'uses' => 'UsersController@store']);
Route::get('user/{id}', ['as' => 'prepareEditUser', 'uses' => 'UsersController@show']);
Route::put('user/{id}/edit', ['as' => 'editUser', 'uses' => 'UsersController@edit']);

// proveedor
Route::get('proveedores', 'ProveedorController@index');
Route::post('agrega-proveedor', ['as' => 'addproveedor', 'uses' => 'ProveedorController@store']);

Route::get('prueba', function() {
	$arr = array(
		'uno' => '1 uno',
		'otro' => [
			'name' => 'Oscar',
			'lastname' => 'larriega'
		],
		'dos' => 'tres'
	);

	echo "<pre>";
	print_r($arr);
	echo "<br>";
	echo $arr['otro']['lastname'];
	echo "</pre>";
});
