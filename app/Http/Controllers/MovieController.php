<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\View\View;

class MovieController extends Controller
{
	public function index(): View
	{
		$movie = Movie::has('quotes')->inRandomOrder()->first();
		$quote = $movie?->quotes()->inRandomOrder()->first();

		return view('movies.index', [
			'movie' => $movie,
			'quote' => $quote,
		]);
	}

	public function show(Movie $movie): View
	{
		return view('movies.show', [
			'movie'  => $movie,
		]);
	}
}
