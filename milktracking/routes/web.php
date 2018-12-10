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

Route::get('/', 'MyController@index')->name('/');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['mGuest'])->group(function () {

	Route::post('/login', 'MyController@login')->name('login');

	Route::get('/login', 'MyController@gLogin')->name('login');

	Route::get('/register', 'MyController@gRegister')->name('register');

	Route::post('/register', 'MyController@register')->name('register');

});


Route::get('/logout', 'MyController@logout')->name('logout');

Route::group(['middleware' => 'mAuth'], function () {


	Route::get('/sample/test', 'HomeController@updateSampleData')->name('sample_test');

	Route::post('/sample/test', 'FormController@putSamepleTestData')->name('sample_test');

	Route::get('/sample/normalize', 'HomeController@updateSampleData')->name('normalize');

	// Route::post('/sample/normalize', 'FormController@putNormalizeData')->name('normalize');

	Route::get('/sample/assimilation', 'HomeController@updateSampleData')->name('assimilation');

	Route::get('/sample/pasteurization', 'HomeController@updateSampleData')->name('pasteurization');

	Route::get('/sample/concentrate', 'HomeController@updateSampleData')->name('concentrate');

	Route::get('/records', 'MyController@getAllRecords');

	Route::get('/records/{recordId}', 'MyController@getRecord');

	Route::get('/records/{recordId}/{phase}', 'MyController@gInput');

    Route::post('/records/{recordId}/{phase}', 'MyController@input');
});

Route::group(['middleware' => 'admin'], function () {

	Route::get('/sign', 'MyController@gSign');

	Route::post('/sign/{recordId}', 'MyController@sign');

});