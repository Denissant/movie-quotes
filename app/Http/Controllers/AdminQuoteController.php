<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\View\View;

class AdminQuoteController extends Controller
{
	public function index(Movie $movie): View
	{
		return view('admin.quote.index', [
			'movie'     => $movie,
			'quotes'    => $movie->quotes()->filter(request('search'))->paginate(6)->withQueryString(),
			'nav_title' => [$movie->title],
		]);
	}
}
