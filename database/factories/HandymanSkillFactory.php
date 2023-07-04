<?php

namespace Database\Factories;

use App\Models\Handyman;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\HandymanSkill;
use App\Models\Skill;

class HandymanSkillFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HandymanSkill::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $handymanIds = Handyman::pluck('id')->all();
        $skillsIds = Skill::pluck('id')->all();
        return [
            'handymen_id' => $this->faker->randomElement($handymanIds),
            'skills_id' => $this->faker->randomElement($skillsIds),
        ];
    }
}
