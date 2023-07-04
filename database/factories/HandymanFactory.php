<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Handyman;
use Illuminate\Support\Facades\Hash;

class HandymanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Handyman::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => $this->faker->userName(),
            'fullName' => $this->faker->name(),
            'password' => Hash::make('password'),
            'email' => $this->faker->email(),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'CIN' => $this->faker->unique()->word(),
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'image' => $this->faker->word(),
            'status' => $this->faker->randomElement(['Married', 'Single', 'Divorced', 'Widowed']),
            'birthday' => $this->faker->dateTimeBetween('-40 years', '-18 years')->format('Y-m-d'),
            'rate' => $this->faker->numberBetween(0, 5),
        ];
    }
}
