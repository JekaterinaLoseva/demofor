<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Use Language route
Route::post('/language-chooser', 'LanguageController@changeLanguage');
	
Route::post('/language/', array (

	'before' => 'csrf',
	'as' => 'language-chooser',
	'uses' => 'LanguageController@changeLanguage',

	)
);
	

Route::group([], function() {

	Route::match(['get', 'post'], '/', ['uses'=>'IndexController@execute', 'as'=>'home']);
	Route::get('/page/{alias}', ['uses'=>'PageController@execute', 'as'=>'page']);
	
	Route::auth();
	
});


//admin
Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function() {
	
	//admin
	Route::get('/', function() {
		
		if(view()->exists('admin.index')) {
		
			$data = ['title' => 'Панель админтстатора'];
			
			return view('admin.index', $data);
		
		}
	
		
		
	});
	
	//admin/pages
	Route::group(['prefix'=>'pages'], function() {
	
		//admin/pages
		Route::get('/', ['uses'=>'PagesController@execute', 'as'=>'pages']);
		
		//admin/pages/add
		Route::match(['get', 'post'], '/add', ['uses'=>'PagesAddController@execute', 'as'=>'pagesAdd']);
		
		//admin/edit/1
		Route::match(['get', 'post', 'delete'], '/edit/{page}', ['uses'=>'PagesEditController@execute', 'as'=>'pagesEdit']);
		
	});
				 
				 
	//admin/portfolios
	Route::group(['prefix'=>'portfolios'], function() {
	
 
		Route::get('/', ['uses'=>'PortfoliosController@execute', 'as'=>'portfolio']);
		
	
		Route::match(['get', 'post'], '/add', ['uses'=>'PortfoliosAddController@execute', 'as'=>'portfoliosAdd']);
		
		
		Route::match(['get', 'post', 'delete'], '/edit/{portfolio}', ['uses'=>'PortfoliosEditController@execute', 'as'=>'portfoliosEdit']);
		
	});	
	
	
	//admin/about
	Route::group(['prefix'=>'abouts'], function() {
	
		//admin/about
		Route::get('/', ['uses'=>'AboutsController@execute', 'as'=>'about']);
		
		//admin/about/add
		Route::match(['get', 'post'], '/add', ['uses'=>'AboutsAddController@execute', 'as'=>'aboutsAdd']);
		
		//admin/edit/1
		Route::match(['get', 'post', 'delete'], '/edit/{about}', ['uses'=>'AboutsEditController@execute', 'as'=>'aboutsEdit']);
		
	});
				 
	
});

Auth::routes();

Route::get('/home', 'HomeController@index');
