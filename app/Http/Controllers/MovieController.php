<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class MovieController extends Controller
{
	public function create(): View
	{
		return view('create-movie');
	}

	public function store()
	{
		return view('dashboard');
	}
}
