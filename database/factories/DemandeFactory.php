<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Demande;
use App\Models\HomeOwner;
use App\Models\Service;

class DemandeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Demande::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $homeOwnersIds = HomeOwner::pluck('id')->all();
        $servicesIds = Service::pluck('id')->all();
        return [
            'title' => $this->faker->sentence(),
            'StartDate' => $this->faker->dateTimeBetween('-2 years', 'now'),
            'home_owners_id' => $this->faker->randomElement($homeOwnersIds),
            'services_id' => $this->faker->randomElement($servicesIds),
        ];
    }
}
