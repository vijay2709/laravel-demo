<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomecontroller extends Controller
{

	public function index(request $request)
	{
		return view('welcome');
	}
	public function show(request $request)
	{
		return view('demo');
	}
	
     
}
	