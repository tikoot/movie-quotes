<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Models\Movie;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class MovieController extends Controller
{
	public function index(Movie $movie): View
	{
		return view('movie.movie-quotes', [
			'movie'  => $movie,
			'quotes' => $movie->quotes,
		]);
	}

	public function show(): View
	{
		return view('movie.show-movies', [
			'movies' => Movie::all(),
		]);
	}

	public function store(StoreMovieRequest $request): RedirectResponse
	{
		$movie = new Movie();
		$movie->setTranslation('title', 'en', $request->title_en);
		$movie->setTranslation('title', 'ka', $request->title_ka);
		$movie->save();

		return redirect()->route('movies.create');
	}

	public function edit(Movie $movie): View
	{
		return view('movie.edit-movie', [
			'movie' => $movie,
		]);
	}

	public function update(Movie $movie, StoreMovieRequest $request): RedirectResponse
	{
		$movie->setTranslation('title', 'en', $request->title_en);
		$movie->setTranslation('title', 'ka', $request->title_ka);
		$movie->update();

		return redirect()->route('movies.show');
	}

	public function destroy(Movie $movie): RedirectResponse
	{
		$movie->delete();
		return redirect()->route('movies.show');
	}
}
