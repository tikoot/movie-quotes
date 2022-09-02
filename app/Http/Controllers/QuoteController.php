<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuoteRequest;
use App\Models\Quote;
use Illuminate\Contracts\View\View;

class QuoteController extends Controller
{
	public function create(): View
	{
		return view('create-quote');
	}

	public function store(StoreQuoteRequest $request): View
	{
		$quote = new Quote();

		$quote->setTranslation('quote', 'en', $request->quote_en);
		$quote->setTranslation('quote', 'ka', $request->quote_ka);
		$quote->save();

		return view('create-quote');
	}
}
