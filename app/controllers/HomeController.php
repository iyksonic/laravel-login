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

	public function showLogin()
	{
		return View::make('pages.login');
	}

	public function showHome()
	{
		return View::make('pages.home');
	}
	public function showAbout()
	{
		return View::make('pages.about');
	}

	public function showPortfolio()
	{
		return View::make('pages.portfolio');
	}

	public function showContact()
	{
		return View::make('pages.contact');
	}

	public function showScodes()
	{
		return View::make('pages.scodes');

	}


	//logout
	public function logout()
	{
		Auth::logout();
		return Redirect::to('/');
	}


	//login page
	public function authenticate()
	{
		$email= Input::get('email');
		$password= Input::get('password');
		if(Auth::attempt(['email'=>$email,'password'=>$password]))
		{
		// $user=Auth::user();	
		return Redirect::to('home');
		}
		else{
			return Redirect::back()->withMessage('invalid credentials!!!!!');
		}
	}


	//signup page
	public function storeUser()
	{	
		// $f=Input::get('first_name');

		$data=Input::all();
		// DB::table('users')->insert($data);
		// User::create()
		$data['password']=Hash::make($data['password']);

		$user = new User;
		$user->fill($data);
		$user->save();
		return Redirect::to('/')->with('message','welcome to erudite!!!!!!');
	}

}

