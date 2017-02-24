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




Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/petitions', function () {

    return View::make('dash'); 
});

Route::get('petitions/{petition_key}', function ($petition_key) {
	$petition_info = DB::table('petitions')->where('petition_key', $petition_key)->select('petition_key', 'summary', 'private', 'title')->get();
	$signatures = DB::table('signatures')->where('petition_id', $petition_key)->select('firstname', 'lastname')->get();
	$result = [$petition_info, $signatures];
	if(empty(array_filter((array) $signatures))) {
		return redirect()->route('/petitions');
	}
    return View::make('index')->with('petition_info', $result); 
});

Route::get('/console', function () {

    return View::make('user-console'); 
})->middleware('auth');

Route::get('auth/logout', function () {
	Auth::logout();
	return Redirect::to('/petitions');
});

Route::any( '{catchall}', function ( $page ) {
	return Redirect::to('/petitions');
    dd( $page . ' requested' );
} )->where('catchall', '(.*)');


