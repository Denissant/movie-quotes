<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\View\View;

class AdminMovieController extends Controller
{
	public function index(): View
	{
		return view('admin.movie.index', [
			'movies'    => Movie::all(),
			'nav_title' => null,
		]);
	}
}
