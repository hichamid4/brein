<?php

namespace Database\Factories;

use App\Models\Demande;
use App\Models\Handyman;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Offer;

class OfferFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Offer::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $handymenIds = Handyman::pluck('id')->all();
        $demandesIds = Demande::pluck('id')->all();
        return [
            'price' => $this->faker->word(),
            'startDate' => $this->faker->dateTimeBetween('-2 years', 'now')->format('Y-m-d'),
            'endtDate' => $this->faker->dateTimeBetween('-2 years', 'now')->format('Y-m-d'),
            'description' => $this->faker->sentence(4),
            'handymen_id' => $this->faker->randomElement($handymenIds),
            'demandes_id' => $this->faker->randomElement($demandesIds),
        ];
    }
}
