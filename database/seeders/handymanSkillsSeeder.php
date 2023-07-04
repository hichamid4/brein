<?php

namespace Database\Seeders;

use App\Models\HandymanSkill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class handymanSkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HandymanSkill::factory()->count(20)->create();
    }
}
