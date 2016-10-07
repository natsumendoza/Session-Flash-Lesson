<?php

/*
|----------------------------------------------------------------------------
| Application Routes
|----------------------------------------------------------------------------
|
| This route group applies the 	"web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => ['web']], function () {

	Route::get('begin', function () {
		flash('You are now signed in!');

		return redirect('/');
	});

	Route::get('/', function () {

		return view('welcome');

	});
});
