<?php

namespace App\Http\Controllers;

use Config;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function switchLang($lang)
    {
        if (array_key_exists($lang, Config::get('languages'))) {
            session(['applocale'=> $lang]);
        }
        return redirect()->back();
    }
}
