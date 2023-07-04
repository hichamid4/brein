<?php

namespace Database\Seeders;

use App\Models\HomeOwner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class homeOwnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HomeOwner::factory()->count(15)->create();
    }
}
