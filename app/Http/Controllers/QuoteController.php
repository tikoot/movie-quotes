<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuoteRequest;
use Illuminate\Contracts\View\View;

class QuoteController extends Controller
{
	public function create(): View
	{
		return view('create-quote');
	}

	public function store(StoreQuoteRequest $request): View
	{
		return view('create-quote');
	}
}
