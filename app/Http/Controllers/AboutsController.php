<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\About;

class AboutsController extends Controller
{
	public function execute() {
	
		if(view()->exists('admin.abouts')) {
		
			$about = About::all();
			
			$data = [
				
				'title'=>'Страницы',
				'abouts' => $about
				
				];
			
			return view('admin.abouts', $data);
		}

	}
}
