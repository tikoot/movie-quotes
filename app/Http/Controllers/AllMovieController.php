<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class AllMovieController extends Controller
{
	public function create(): View
	{
		return view('dashboard');
	}
}
