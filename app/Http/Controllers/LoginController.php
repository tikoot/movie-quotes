<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
	public function create()
	{
		return view('login');
	}

	public function store()
	{
		return view('dashboard');
	}
}
