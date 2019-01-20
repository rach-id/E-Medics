<?php

use Illuminate\Support\Facades\Auth;

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
});

Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home'); */


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/home', function () {

	$role = Auth::user()->email;
    
    $select = DB::select('select * from users where email="' . $role .'"');
 	return view ('home')->with('name',$select);
});
