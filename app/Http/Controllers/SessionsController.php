<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSessionRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SessionsController extends Controller
{
	public function create(): View
	{
		return view('sessions.create');
	}

	public function store(StoreSessionRequest $request): RedirectResponse
	{
		$attributes = $request->validated();
		$remember = request('remember-me') === 'on';

		if (auth()->attempt($attributes, $remember))
		{
			session()->regenerate();
			return redirect(RouteServiceProvider::HOME)->with('success', 'You have logged in successfully.');
		}

		return back()
			->withInput()
			->withErrors(['username' => 'You have entered an invalid username or password.']);
	}

	public function destroy(): RedirectResponse
	{
		auth()->logout();

		return redirect('/')->with('success', 'You have logged out.');
	}
}