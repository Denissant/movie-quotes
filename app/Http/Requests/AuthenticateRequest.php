<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthenticateRequest extends FormRequest
{
	public function rules(): array
	{
		return [
			'username' => 'required',
			'password' => 'required',
		];
	}
}