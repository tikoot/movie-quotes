<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
	public function login(): View
	{
		return view('login');
	}

	public function dashboard(StorePostRequest $request): View|ValidationException
	{
		$attributes = $request->validated();

		if (auth()->attempt($attributes))
		{
			session()->regenerate();

			return view('dashboard');
		}

		throw ValidationException::withMessages(['email' => 'Your provided credentials could not be verified.']);
	}

	public function logout(): RedirectResponse
	{
		auth()->logout();

		return redirect()->route('user.login');
	}
}
