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
/*
Route::get('/', function () {
    return view('{{student}}');
});*/
Route::get('/addStd','studentController@create');

Route::get('/list', 'studentController@index');

Route::resource('student'/*route name*/,'studentController'/*controller file name*/);

Route::get('/home','studentController@show');
Route::get('/home/about',function(){
	return view('About');
});
Route::get('/Search','studentController@search');



Route::post('/checklogin', 'HomeController@checklogin');
Route::get('/successlogin', 'HomeController@successlogin');
Route::get('/logout', 'HomeController@logout');
 

Route::get('/login', 'HomeController@index');
