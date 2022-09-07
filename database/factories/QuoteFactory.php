<?php

namespace Database\Factories;

use App\Models\Movie;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quote>
 */
class QuoteFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition()
	{
		return [
			'user_id'  => User::factory(),
			'movie_id' => Movie::factory(),
			'quote'    => [
				'en' => $this->faker->sentence,
				'ka' => $this->faker->sentence,
			],
			'thumbnail' => $this->faker->imageUrl(200, 200),
		];
	}
}
