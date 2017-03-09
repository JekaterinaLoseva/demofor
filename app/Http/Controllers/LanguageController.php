<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

use App;
use Lang;

class LanguageController extends Controller
{
    //
    public function changeLanguage(Request $request){
       
		
		if($request->ajax()) {
		
			$request->session()->put('locale', $requst->locale);
			$request->session()->flash('alert-success', ('app.Locale_Change_Success'));
		
		}
    }
}
