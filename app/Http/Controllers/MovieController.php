<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{
	public function index()
	{
		$movie = Movie::has('quotes')->inRandomOrder()->first();
		$quote = $movie->quotes()->inRandomOrder()->first();

		return view('movies.index', [
			'movie' => $movie,
			'quote' => $quote,
		]);
	}
}
