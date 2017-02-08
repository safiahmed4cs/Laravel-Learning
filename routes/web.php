<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
\App::setLocale('en');
\Debugbar::debug();

// Route::post('/language', function(){
// 	session(['lang' => request('lang')]);
// 	return redirect()->back();	
// });

Route::get('/users', 'VueController@list');
Route::get('/user', 'VueController@show');
Route::get('/vue', 'VueController@index');

Route::get('/home', 'HomeController@index');

// Route::get('/workflow', 'WorkflowsController@index');
Route::resource('workflows', 'WorkflowsController');
