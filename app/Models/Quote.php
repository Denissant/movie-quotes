<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Quote extends Model
{
	use HasFactory;

	use HasTranslations;

	public array $translatable = ['content'];

	public function author()
	{
		return $this->belongsTo(User::class, 'user_id');
	}

	public function movie()
	{
		return $this->belongsTo(Movie::class);
	}
}
