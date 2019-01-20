<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


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

Route::get('/stagiaire', function () {
 	return view ('stagiaire');
});

Route::get('/stagiairecr', function () {
	
	$role = Auth::user()->Annee;
	
	
    $select = DB::select('select * from cours where annee="'.$role.'"');
    
 	return view ('stagiairecr')->with('name',$select);
});

Route::get('/stagiairecc', function () {

	$role = Auth::user()->Annee;
	
	
    $select = DB::select('select * from cc where annee="'.$role.'"');
    
 	return view ('stagiairecc')->with('name',$select);
});

Route::get('/stagiaireqc', function () {

    $role = Auth::user()->Annee;
	
    $select = DB::select('select * from qcm where annee="'.$role.'"');
    
 	return view ('stagiaireqc')->with('name',$select);
});

Route::get('/formateur', function () {
 	return view ('formateur');
});

Route::get('/formateurcr', function () {

    $select = DB::select('select * from cours');
    
 	return view ('formateurcr')->with('name',$select);
});

Route::get('/formateurcc', function () {

    $select = DB::select('select * from cc');
    
 	return view ('formateurcc')->with('name',$select);
});

Route::get('/formateurqc', function () {

    $select = DB::select('select * from qcm');
    
 	return view ('formateurqc')->with('name',$select);
});

Route::get('/ajouter', function () {
    
 	return view ('ajouter');
});


Route::post('/submit', function (Request $request) {
    $data = $request->validate([
        'title' => 'required|max:255',
        'url' => 'required',
        'description' => 'required|max:255',
    ]);

	

    return redirect('/');
});

