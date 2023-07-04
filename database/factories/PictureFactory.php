<?php

namespace Database\Factories;

use App\Models\Demande;
use App\Models\Message;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Picture;
use App\Models\Skill;

class PictureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Picture::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $skillsIds = Skill::pluck('id')->all();
        $messagesIds = Message::pluck('id')->all();
        $demandesIds = Demande::pluck('id')->all();
        $columnName = $this->faker->randomElement(['skills_id', 'messages_id', 'demandes_id']);
        if ($columnName == 'demandes_id') {
            $ids = $demandesIds;
        } else if ($columnName == 'messages_id') {
            $ids = $messagesIds;
        } else {
            $ids = $skillsIds;
        }
        return [
            'pic' => $this->faker->word(),
            $columnName => $this->faker->randomElement($ids),
        ];
    }
}
