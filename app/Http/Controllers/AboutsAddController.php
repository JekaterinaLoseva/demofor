<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


use Validator;
use App\About;

class AboutsAddController extends Controller
{
    //
    
    public function execute(Request $request) {
    	
    	if($request->isMethod('post')) {
			$input = $request->except('_token');
			
			
			$massages = [
			
				'required'=>'Поле :attribute обязательно к заполнению',
				'unique'=>'Поле :attribute должно быть уникальным'
			
			];
			
			
			$validator = Validator::make($input,[
			
				'name' => 'required|max:255',
				'alias' => 'required|unique:pages|max:255',
				'text'=> 'required'
			
			], $massages);
			
			if($validator->fails()) {
				return redirect()->route('aboutsAdd')->withErrors($validator)->withInput();
			}
			
			
			
			$about = new About();
			
			
			//$page->unguard();
			
			$about->fill($input);
			
			if($about->save()) {
				return redirect('admin')->with('status','Страница добавлена');
			}
			
		}
    	
    
		if(view()->exists('admin.abouts_add')) {
			
			$data = [
					
					'title' => 'Новая страница'
					
					];
			return view('admin.abouts_add',$data);		
			
		}
		
		abort(404);
		
		
	}
}
