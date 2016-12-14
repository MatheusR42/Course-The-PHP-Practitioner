<?php

namespace App\Controllers;

class PageController
{
	public function home()
	{
		return view('index');
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