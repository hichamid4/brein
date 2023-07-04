<?php

namespace Database\Seeders;

use App\Models\Handyman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HandymenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Handyman::factory()->count(10)->create();
    }
}
