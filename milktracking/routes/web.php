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

Route::get('/sample_report/{param}', 'MyController@sample_report')->name('sample_report');

Route::middleware(['mGuest'])->group(function () {

	Route::post('/login', 'MyController@login')->name('login');

	Route::get('/login', 'MyController@gLogin')->name('login');


});


Route::post('/logout', 'MyController@logout')->name('logout');

Route::group(['middleware' => 'mAuth'], function () {

	Route::get('/newRecord', 'MyController@newRecord')->name('newRecord');

	Route::get('/records', 'MyController@getAllRecords');

	Route::get('/records/{recordId}', 'MyController@getRecord');

	Route::get('/records/{recordId}/{phase}', 'MyController@gInput')->name('putRecord');

    Route::post('/records/{recordId}/{phase}', 'MyController@input')->name('putRecord');

    Route::get('/home', 'MyController@home')->name('home');

});

Route::group(['middleware' => 'admin'], function () {

	Route::get('/register', 'MyController@gRegister')->name('register');

	Route::post('/register', 'MyController@register')->name('register');

	Route::get('/sign/{recordId}', 'MyController@sign')->name('sign');
});
