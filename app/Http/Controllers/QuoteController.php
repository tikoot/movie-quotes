<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuoteRequest;
use App\Models\Quote;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class QuoteController extends Controller
{
	public function show(): View
	{
		return view('show-quotes', [
			'quotes' => Quote::all(),
		]);
	}

	public function create(): View
	{
		return view('create-quote');
	}

	public function store(StoreQuoteRequest $request): RedirectResponse
	{
		$quote = new Quote();
		$quote->movie_id = $request->movie_id;
		$quote->user_id = auth()->user()->id;
		$quote->thumbnail = request()->file('thumbnail')->store('thumbnails');
		$quote->setTranslation('quote', 'en', $request->quote_en);
		$quote->setTranslation('quote', 'ka', $request->quote_ka);
		$quote->save();

		return redirect()->route('quote.show');
	}

	public function edit(Quote $quote): View
	{
		return view('edit-quote', [
			'quote' => $quote,
		]);
	}

	public function update(Quote $quote, StoreQuoteRequest $request): RedirectResponse
	{
		$quote->movie_id = $request->movie_id;
		$quote->thumbnail = request()->file('thumbnail')->store('thumbnails');
		$quote->setTranslation('quote', 'en', $request->quote_en);
		$quote->setTranslation('quote', 'ka', $request->quote_ka);

		$quote->update();

		return redirect()->route('quote.show');
	}
}
