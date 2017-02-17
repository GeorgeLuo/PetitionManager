<?php

use Illuminate\Http\Request;
use App\Signature;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/signatures/', function () {
	Route::resource('signatures', 'SignatureController',
	                ['only' => ['index', 'show', 'store']]);
});

Route::get('petitions', function () {
    $petitions = DB::table('petitions')->select('title', 'petition_key', 'summary')->orderBy('created_at', 'desc')->get();
    return $petitions;
});

Route::get('signatures/{petition_id}', function ($petition_id) {
    $signatures = DB::table('signatures')->where('petition_id', $petition_id)->select('firstname', 'lastname', 'email', 'message')->orderBy('created_at', 'desc')->get();
    return $signatures;
});

Route::post('signatures/{petition_id}', function ($petition_id, Request $request) {
	$input = $request->all();

    Signature::create(array(
        'petition_id' => $petition_id,
        'email' => $request->email,
        'firstname' => $request->firstname,
        'lastname' => $request->lastname,
        'phone' => $request->phone,
        'message' => $request->message,
    ));

    $to      = $request->email;
    $subject = $petition_id;
    $message = $request->firstname + ' ' + $request->lastname + ', thank you for your interest.';
    $headers = 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
});

Route::resource('photo', 'PhotoController', ['only' => [
    'index', 'show'
]]);



Route::group(array('prefix' => 'signature'), function() {

    // since we will be using this just for CRUD, we won't need create and edit
    // Angular will handle both of those forms
    // this ensures that a user can't access api/create or api/edit when there's nothing there
    Route::resource('signature', 'SignatureController', 
        array('only' => array('index', 'store', 'destroy')));
});
