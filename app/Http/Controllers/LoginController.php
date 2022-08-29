<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use Illuminate\Contracts\View\View;

class LoginController extends Controller
{
	public function create(): View
	{
		return view('login');
	}

	public function store(StorePostRequest $request)
	{
		$attributes = $request->validated();

		if (auth()->attempt($attributes))
		{
			session()->regenerate();

			return view('dashboard');
		}

		return back()
		->withErrors(['email' => 'Your provided credentials could not be verified.']);
	}
}
