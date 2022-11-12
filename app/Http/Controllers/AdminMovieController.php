<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Models\Movie;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class AdminMovieController extends Controller
{
	public function index(): View
	{
		return view('admin.movie.index', [
			'movies'    => Movie::all(),
			'nav_title' => [],
		]);
	}

	public function create(): View
	{
		return view('admin.movie.create', ['nav_title' => ['Add Movie']]);
	}

	public function store(StoreMovieRequest $request): RedirectResponse
	{
		$attributes = $request->validated();
		$attributes = $this->reformatAttributes($attributes);
		$attributes['user_id'] = auth()->id();

		$movie = Movie::create($attributes);
		return redirect()->route('admin.movie.index')
						 ->with('success', 'Movie "' . $movie->title . '" added successfully!');
	}

	public function edit(Movie $movie): View
	{
		return view('admin.movie.edit', [
			'movie'     => $movie,
			'nav_title' => ['Edit: ' . $movie->title],
		]);
	}

	public function update(StoreMovieRequest $request, Movie $movie): RedirectResponse
	{
		$attributes = $request->validated();
		$attributes = $this->reformatAttributes($attributes);

		$movie->update($attributes);
		return redirect()->route('admin.movie.index')
						 ->with('success', 'Movie updated successfully!');
	}

	public function destroy(Movie $movie)
	{
		foreach ($movie->quotes as $quote)
		{
			Storage::delete($quote->image);
		}

		$movie->delete();
		return back()->with('success', 'Movie "' . $movie->title . '" deleted successfully!');
	}

	protected function reformatAttributes($attributes)
	{
		$attributes['title'] = [
			'en' => $attributes['title_en'],
			'ka' => $attributes['title_ka'],
		];
		unset($attributes['title_en'], $attributes['title_ka']);
		$attributes['slug'] = $this->generateSlug($attributes['title']['en']);
		return $attributes;
	}

	protected function generateSlug($title): string
	{
		$title = preg_replace('/[^A-Za-z0-9 ]/', '', $title);
		$titleWords = explode(' ', $title);
		$slug = '';
		for ($i = 0; $i < count($titleWords) && $i < 5; $i++)
		{
			$slug .= $titleWords[$i] . '-';
		}
		$slug .= random_int(100000, 999999);
		return $slug;
	}
}
