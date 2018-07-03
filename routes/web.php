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

Route::get('/', 'PageController@index');
Route::get('/products', 'PageController@products')->name('products');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');
Route::get('/verify/{token}', 'VerifyController@verify')->name('verify');


Route::prefix('admin')->group(function(){
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

	// password reset routes
	Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
	Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
	Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');


	Route::resource('/users', 'AdminUsersController', ['as'=>'admin']);

	Route::resource('/products', 'AdminProductsController', ['as'=>'admin']);


	//Tags
	Route::get('/tags', 'AdminTagController@index')->name('admin.tags.index');
	Route::post('/tags', 'AdminTagController@store')->name('admin.tags.store');
	Route::get('/tags/{tag}/edit', 'AdminTagController@edit')->name('admin.tags.edit');
	Route::patch('/tags/{tag}', 'AdminTagController@update')->name('admin.tags.update');
	Route::delete('/tags/{tag}', 'AdminTagController@destroy')->name('admin.tags.destroy');
});
