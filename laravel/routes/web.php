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

Route::get('/', function () {
    return view('home');
})->name('home');

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');




Route::get('admin/login', 'Auth\AdminLoginColtroller@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Auth\AdminLoginColtroller@login')->name('admin.login.submit');

Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('administracion','administracion\HomeController@index')->name('administracion');

	Route::namespace('administracion')->prefix('admin')->group(function () {
    	Route::get('/','HomeController@index')->name('administracion_home');

	    Route::get('usuarios_eliminar/{id}', 'UserController@destroy')->name('usuarios_eliminar');
	    Route::get('edit_password/{id}', 'UserController@edit_password')->name('edit_password');
	    Route::put('update_password/{id}', 'UserController@update_password')->name('update_password');
	    Route::resource('usuarios', 'UserController');

	    Route::get('banners_eliminar/{id}', 'BannerController@destroy')->name('banners_eliminar');
	    Route::resource('banners', 'BannerController');

	    Route::get('exams_eliminar/{id}', 'ExamController@destroy')->name('exams_eliminar');
	    Route::resource('exams', 'ExamController');

	    Route::get('categories_eliminar/{id}', 'CategoryController@destroy')->name('categories_eliminar');
	    Route::resource('categories', 'CategoryController');

		Route::get('panels_eliminar/{id}', 'PanelController@destroy')->name('panels_eliminar');
	    Route::resource('panels', 'PanelController');
		
		Route::get('related_exams', 'PanelController@related_exams')->name('related_exams');
		Route::get('related_exams_ajax', 'PanelController@related_exams_ajax')->name('related_exams_ajax');
	    Route::get('related_marcar/{id}/{accion}', 'PanelController@related_marcar')->name('related_marcar');


    });
});