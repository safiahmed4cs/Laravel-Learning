<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function _construct(){

    	$this->middleware('auth');
    }

    public function index(){
    	return \App\User::latest()->get();
    }

    public function list(){
    	return \App\User::latest()->get();
    }
}
