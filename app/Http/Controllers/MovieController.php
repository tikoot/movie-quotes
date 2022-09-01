<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Models\Movie;
use Illuminate\Contracts\View\View;

class MovieController extends Controller
{
	public function create(): View
	{
		return view('create-movie');
	}

	public function show(): View
	{
		return view('show-movie', [
			'movies' => Movie::all(),
		]);
	}

	public function store(StoreMovieRequest $request): View
	{
		$movie = new Movie();
		$movie->setTranslation('title', 'en', $request->title_en);
		$movie->setTranslation('title', 'ka', $request->title_ka);
		$movie->save();

		return view('show-movie');
	}
}
