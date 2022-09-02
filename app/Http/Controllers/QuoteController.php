<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class QuoteController extends Controller
{
	public function create(): View
	{
		return view('create-quote');
	}

	public function store(): View
	{
		return view('create-quote');
	}
}
