<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Movie extends Model
{
	use HasFactory;

	use HasTranslations;

	protected $guarded = [];

	public array $translatable = ['title'];

	public function scopeFilter(Builder $query, $searchQuery)
	{
		if ($searchQuery)
		{
			$query->where(
				fn ($query) => $query->where('title', 'like', '%' . $searchQuery . '%')
			);
		}
	}

	public function author()
	{
		return $this->belongsTo(User::class, 'user_id');
	}

	public function quotes()
	{
		return $this->hasMany(Quote::class);
	}
}
