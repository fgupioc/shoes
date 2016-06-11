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

Route::get('/', function () {
	return view('welcome');
});
Route::group(['middlewareGroups' =>['web']], function(){
	//rutas de autenticacion
	Route::auth();
	Route::get('/home', 'HomeController@index');
	//ruta del panel de adminstracion
	Route::get('admin', ['as' => 'admin', 'uses' => 'AdminController@index']);

	//rutas de la web general
	Route::get('principal',['as'=>'principal','uses'=>'WebMain\PrincipalController@index']);

	Route::group(['prefix'=>'admin/','middleware' => ['auth','access_panel']],function(){
		Route::get('panel',['as'=>'panel','uses'=>'AdminController@panel']);
	});
	
	Route::group( ['middleware' => ['auth','administrator','admin_gen']], function () {
		Route::get('admin/instituciones', ['as'=> 'institution_list','uses'=>'Administrator\AdminGeneralController@institution_list']);
	});


/*Route::group(['middleware'=>['auth','admin']],function (){
		Route::get('producto',['as'=>'producto','uses'=>'Product\ProductController@index']);
		Route::get('producto/create',['as'=>'productocreate','uses'=>'Product\ProductController@create']);
		Route::post('producto/store',['as'=>'productostore','uses'=>'Product\ProductController@store']);
		Route::get('producto/edit/{id}',['as'=>'productoedit','uses'=>'Product\ProductController@edit']);
		Route::put('producto/update/{id}',['as'=>'productoupdate','uses'=>'Product\ProductController@update']);
		Route::get('producto/delete/{id}',['as'=>'productodelete','uses'=>'Product\ProductController@show']);
		Route::post('producto/destroy/{id}',['as'=>'productodestroy','uses'=>'Product\ProductController@destroy']);

	}); */
});
