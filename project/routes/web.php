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
        'description' => 'max:255',
    ]);

	// Ajout des donnees a la base des donnees
	
	// data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);
	
	
	$cmpt = 0;
	
	
	if($request->type == 1) {
		$cmpt = sizeOf(DB::select('select * from cours')) + 1 ;
		
		DB::insert('insert into cours (titre, lien, annee, id, session, description) values (\''. $request->title.'\', \'/storage/cours/'. $cmpt .'/1\', '. $request->annee .', ' . $cmpt . ', ' . $request->session .', \'' . $request->description . '\')' );
	} else if ($request->type = 2) {
	
		$cmpt = sizeOf(DB::select('select * from cc')) + 1 ;
		
		DB::insert('insert into cc (titre, lien, annee, id, session, description) values (\''. $request->title.'\', \'/storage/cours/'. $cmpt .'/1\', '. $request->annee .', ' . $cmpt . ', ' . $request->session .', \'' . $request->description . '\')' );
		
	} else {
	
		$cmpt =sizeOf( DB::select('select * from qcm')) + 1 ;
		
		DB::insert('insert into qcm (titre, lien, annee, id, session, description) values (\''. $request->title.'\', \'/storage/cours/'. $cmpt .'/1.\', '. $request->annee .', ' . $cmpt . ', ' . $request->session .', \'' . $request->description . '\')' );
	}

		 //INSERT INTO table_name (column1, column2, column3,...)
		// VALUES (value1, value2, value3,...) 


	// Ajout du document
	$file = $request->file('url');
	
    $filename = '1.pdf';

    // save to storage/app/photos as the new $filename
    $path = $file->storeAs('./public/cours/' . $cmpt .'/', $filename);
	
	
 	return view ('succ');
});

Route::get('/succ', function () {
 	return view ('succ');
});

