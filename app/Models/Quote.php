<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Quote extends Model
{
	use HasFactory;

	use HasTranslations;

	protected $guarded = [];

	public array $translatable = ['content'];

	public function scopeFilter(Builder $query, $searchQuery)
	{
		if ($searchQuery)
		{
			$query->where(
				fn ($query) => $query->where('content', 'like', '%' . $searchQuery . '%')
			);
		}
	}

	public function author()
	{
		return $this->belongsTo(User::class, 'user_id');
	}

	public function movie()
	{
		return $this->belongsTo(Movie::class);
	}
}
