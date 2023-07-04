<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(30)->create();
        $this->call(CategoriesSeeder::class);
        $this->call(ServicesSeeder::class);
        $this->call(HandymenSeeder::class);
        $this->call(SkillsSeeder::class);
        $this->call(handymanSkillsSeeder::class);
        $this->call(homeOwnersSeeder::class);
        $this->call(DemandesSeeder::class);
        $this->call(OffersSeeder::class);
        $this->call(ReviewsSeeder::class);
        $this->call(MessagesSeeder::class);
        $this->call(PicturesSeeder::class);
    }
}
