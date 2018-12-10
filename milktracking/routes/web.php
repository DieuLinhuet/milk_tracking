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
    return view('welcome');
})->name('/');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/login', 'Auth\LoginController@checkLogin')->name('login');

Route::get('/login', 'Auth\LoginController@getLogin')->name('login');

Route::get('/register', function(){
  return view('auth.register', ['isLogin'=>0,'userName'=> 'tung']);
})->name('register');

Route::get('/sample/test', 'HomeController@updateSampleData')->name('sample_test');

Route::post('/sample/test', 'FormController@putSamepleTestData')->name('sample_test');

Route::get('/sample/normalize', 'HomeController@updateSampleData')->name('normalize');

// Route::post('/sample/normalize', 'FormController@putNormalizeData')->name('normalize');

Route::get('/sample/assimilation', 'HomeController@updateSampleData')->name('assimilation');

Route::get('/sample/pasteurization', 'HomeController@updateSampleData')->name('pasteurization');

Route::get('/sample/concentrate', 'HomeController@updateSampleData')->name('concentrate');
