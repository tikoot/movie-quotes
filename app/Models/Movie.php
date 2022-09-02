<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Movie extends Model
{
	use HasFactory, HasTranslations;

	public $translatable = ['title'];

	protected $guarded = ['id'];

	public function quotes(): HasMany
	{
		return $this->hasMany(Quote::class);
	}
}
