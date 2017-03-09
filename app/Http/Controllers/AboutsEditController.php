<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\About;

use Validator;

class AboutsEditController extends Controller
{
    //
    
    public function execute(About $about,Request $request) {
		
		
		if(!$about) {
			return redirect('admin');
		}
		
		if($request->isMethod('delete')) {
			$about->delete();
			return redirect('admin')->with('status','Страница удалена');
		}
		
		
		if($request->isMethod('post')) {
			
			
			$input = $request->except('_token');
			
			$validator = Validator::make($input,[
			
				'name'=>'required|max:255',
				'alias' => 'required|max:255|unique:pages,alias,'.$input['id'],
				'text' => 'required'
			
			]);
			
			if($validator->fails()) {
				return redirect()
						->route('aboutsEdit',['about'=>$input['id']])
						->withErrors($validator);
			}
			
			
			
			$about->fill($input);
			
			if($about->update()) {
				return redirect('admin')->with('status','Страница обновлена');
			}
			
		}

		
		$old = $about->toArray();
		if(view()->exists('admin.abouts_edit')) {
			
			$data = [
					'title' => 'Редактирование страницы - '.$old['name'],
					'data' => $old
					];
			return view('admin.abouts_edit',$data);		
			
		}
		
	}
}
