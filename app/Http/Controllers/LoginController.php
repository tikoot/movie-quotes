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
		$attributes = request()->validate([
			'email'    => 'required|email',
			'password' => 'required',
		]);

		if (auth()->attempt($attributes))
		{
			session()->regenerate();

			return view('dashboard');
		}

		return back()
		->withErrors(['email' => 'Your provided credentials could not be verified.']);
	}
}
