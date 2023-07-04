<?php

namespace Database\Factories;

use App\Models\Demande;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Message;
use App\Models\Offer;

class MessageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Message::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $demandesIds = Demande::pluck('id')->all();
        $offersIds = Offer::pluck('id')->all();
        return [
            'content' => $this->faker->word(),
            'document' => $this->faker->word(),
            'order' => $this->faker->numberBetween(0, 1),
            'demandes_id' => $this->faker->randomElement($demandesIds),
            'offers_id' => $this->faker->randomElement($offersIds),
        ];
    }
}
