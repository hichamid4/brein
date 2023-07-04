<?php

namespace Database\Factories;

use App\Models\Offer;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Review;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $offersIds = Offer::pluck('id')->all();
        return [
            'comment' => $this->faker->sentence(3),
            'like' => $this->faker->numberBetween(0, 1),
            'dislike' => $this->faker->numberBetween(0, 1),
            'rate' => $this->faker->numberBetween(0, 5),
            'offers_id' => $this->faker->randomElement($offersIds),
        ];
    }
}
