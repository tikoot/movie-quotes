<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuoteRequest;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class QuoteController extends Controller
{
	public function index(Quote $quote): View
	{
		if ($quote->count() > 0)
		{
			return view('index', [
				'quote' => Quote::all()->random(),
			]);
		}

		return view('index', [
			'quote' => $quote,
		]);
	}

	public function show(): View
	{
		return view('quote.show-quotes', [
			'quotes' => Quote::all(),
		]);
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

		return redirect()->route('quotes.show');
	}

	public function edit(Quote $quote): View
	{
		return view('quote.edit-quote', [
			'quote'  => $quote,
			'movies' => Movie::all(),
		]);
	}

	public function create(): View
	{
		return view('quote.create-quote', [
			'movies' => Movie::all(),
		]);
	}

	public function update(Quote $quote, StoreQuoteRequest $request): RedirectResponse
	{
		$quote->movie_id = $request->movie_id;
		$quote->thumbnail = request()->file('thumbnail')->store('thumbnails');
		$quote->setTranslation('quote', 'en', $request->quote_en);
		$quote->setTranslation('quote', 'ka', $request->quote_ka);

		$quote->update();

		return redirect()->route('quotes.show');
	}

	public function destroy(Quote $quote): RedirectResponse
	{
		$quote->delete();
		return redirect()->route('quotes.show');
	}
}
