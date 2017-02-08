<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->post('/approvalSettings/store', 'WorkflowsController@store');

Route::middleware('auth:api')->get('/users', function (Request $request) {
    return \App\User::latest()->get();
});

Route::middleware('auth:api')->get('/clients', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->post('/projects/create', 'projectController@create');
Route::middleware('auth:api')->post('/projects/store', 'projectController@store');
Route::middleware('auth:api')->get('/projects', 'projectController@index');
