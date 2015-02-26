<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function about()
	{
		return $this->layout->body=View::make('about');
	}

	public function products()
	{
		$products = Product::all();
		return $this->layout->body=View::make('products')->with('products', $products);
	}
}
