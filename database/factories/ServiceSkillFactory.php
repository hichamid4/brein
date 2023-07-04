<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\Skill;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServiceSkill>
 */
class ServiceSkillFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * 
     * @return array<string, mixed>
     */

     protected $model = ServiceSkill::class;
     
    public function definition(): array
    {
        $serviceIds = Service::pluck('id')->all();
        $skillIds = Skill::pluck('id')->all();

        return [
            'services_id' => $this->faker->randomElement($serviceIds),
            'skills_id' => $this->faker->randomElement($skillIds),
        ];
    }
}
