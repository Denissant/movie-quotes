<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthenticateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AuthController extends Controller
{
	public function login(): View
	{
		return view('auth.login');
	}

	public function authenticate(AuthenticateRequest $request): RedirectResponse
	{
		$attributes = $request->validated();
		$remember = request('remember-me') === 'on';

		if (auth()->attempt($attributes, $remember))
		{
			session()->regenerate();
			return redirect()->route('admin.movie.index')
							 ->with('success', __('You have logged in successfully.'));
		}

		return back()
			->withInput()
			->withErrors(['username' => __('You have entered an invalid username or password.')]);
	}

	public function logout(): RedirectResponse
	{
		auth()->logout();

		return redirect()->route('movie.index')->with('success', __('You have logged out.'));
	}
}
