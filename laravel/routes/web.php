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

Route::get('category/', 'PanelController@category')->name('category');
Route::get('test/', 'PanelController@test')->name('test');

Route::get('/about-us', 'HomeController@aboutus')->name('aboutus');
Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('/how-it-works', 'HomeController@howitworks')->name('howitworks');
Route::get('/privacy-policy', 'HomeController@privacypolicy')->name('privacypolicy');
Route::get('/locator', 'HomeController@locator')->name('locator');
Route::get('/payment-options', 'HomeController@payment_options')->name('payment_options');
Route::get('/terms-and-conditions', 'HomeController@terms_and_conditions')->name('terms_and_conditions');
Route::get('/refund-policy', 'HomeController@refund_policy')->name('refund_policy');
Route::get('/why-ltod', 'HomeController@why_ltod')->name('why_ltod');


Route::get('/checkout', 'AuthorizeController@index');
Route::post('/checkout', 'AuthorizeController@chargeCreditCard');




Route::get('/testpwn', 'HomeController@testpwn')->name('testpwn');

Route::get('/test_types', 'TestController@test_types')->name('test_types');
Route::get('/test_groups', 'TestController@test_groups')->name('test_groups');

Route::get('/test_labs', 'LabController@test_labs')->name('test_labs');




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