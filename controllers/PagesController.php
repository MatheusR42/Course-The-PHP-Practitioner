<?php

class PageController
{
	public function home()
	{
		$users = App::get('database')->selectAll('users');

		return view('index', compact('users'));
	}


	public function contact()
	{
		return view('contact');
	}


	public function about()
	{
		return view('about');
	}

}