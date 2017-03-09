<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;
use App\Portfolio;
use App\About;

use Mail;

class IndexController extends Controller
{
    public function execute(Request $request) {
		
		
	if($request->isMethod('post')) {
			
		/* $messages = [
			
			'required' => 'Обязательно для заполнения',
			'email' => 'Должно соответсвовать типу поля email'
			
			];
		
			$this->validate($request, [
			
				'name' => 'required|max:255',
				'email' => 'required|email',
				'text' => 'required',
			
			], $messages); */
			
		$data = $request->all();
		
		$result = Mail::send('site.email', ['data' => $data], function($message) use ($data) {
		
			$mail_admin = env('MAIL_ADMIN');
			
			$message->from($data['email'], $data['name']);
			$message->to($mail_admin, 'Mrs. Admin')->subject('Question');
			
		});
		
		if($result) {
		
			return redirect()->route('home')->with('status', 'Email is send');
		
		}
		
		//mail 
		
		}
		
		$pages = Page::all();
		$portfolios = Portfolio::all();
		$abouts = About::all();
	
		
		
		$menu = array();
		foreach($pages as $page) {
		
			$item = array('title' => $page->name, 'alias' => $page->alias);
			array_push($menu, $item);
		
		}
		
		$item = array('title' => 'Portfolio', 'alias' => 'portfolio');
		array_push($menu, $item);
		
		$item = array('title' => 'About', 'alias' => 'about');
		array_push($menu, $item);
		
		$item = array('title' => 'Contact', 'alias' => 'contact');
		array_push($menu, $item);
		
		
		return view('site.index', array(
			
										'menu' => $menu,
										'pages' => $pages,
										'portfolios' => $portfolios,
										'abouts' => $abouts
		
										));
	
	}
}
