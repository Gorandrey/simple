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

// Route::get('/', function () {
//     return view('welcome');
// });


//*****Page*****//

Route::group(['middleware'=>'web'], function(){
	Route::match(['get', 'post'], '/', 'IndexController@execute')->name('home');
	// Route::get('/page/{alias}', ['uses'=>'PageController@execute', 'as'=>'page']);

	Route::auth();
});


//*****Admin*****//

// Route::group(['middleware'=>'auth', 'prefix'=>'admin'], function(){
	
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
