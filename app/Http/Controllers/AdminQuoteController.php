<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuoteRequest;
use App\Http\Requests\UpdateQuoteRequest;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\RedirectResponse;
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

	public function create(Movie $movie): View
	{
		return view('admin.quote.create', [
			'movie'     => $movie,
			'nav_title' => [$movie->title, 'Add Quote'],
		]);
	}

	public function store(StoreQuoteRequest $request, Movie $movie): RedirectResponse
	{
		$attributes = $request->validated();
		$attributes = $this->reformatAttributes($attributes);

		$attributes['user_id'] = auth()->id();
		$attributes['movie_id'] = $movie->id;
		$attributes['image'] = $this->uploadImage();

		Quote::create($attributes);
		return redirect()->route('admin.movie.quote.index', $movie)
			->with('success', 'Quote added successfully!');
	}

	public function edit(Movie $movie, Quote $quote): View
	{
		return view('admin.quote.edit', [
			'quote'     => $quote,
			'movie'     => $movie,
			'nav_title' => [$movie->title, 'Edit Quote'],
		]);
	}

	public function update(UpdateQuoteRequest $request, Movie $movie, Quote $quote): RedirectResponse
	{
		$attributes = $request->validated();
		$attributes = $this->reformatAttributes($attributes);

		if ($attributes['image'] ?? false)
		{
			$attributes['image'] = $this->uploadImage();
			$this->deleteImage($quote->image);
		}

		$quote->update($attributes);
		return redirect()->route('admin.movie.quote.index', $movie)
			->with('success', 'Quote updated successfully!');
	}

	protected function reformatAttributes($attributes)
	{
		$attributes['content'] = [
			'en' => $attributes['content_en'],
			'ka' => $attributes['content_ka'],
		];
		unset($attributes['content_en'], $attributes['content_ka']);
		return $attributes;
	}

	protected function uploadImage(): string
	{
		$image = request()->file('image');
		return $image->store('images');
	}
}
