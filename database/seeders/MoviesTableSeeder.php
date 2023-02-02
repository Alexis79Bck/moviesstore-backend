<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        // Create 50 product records
        for ($i = 0; $i < 50; $i++) {
            Movie::create([
                'title' => $faker->words(4, true),
                'year' => $faker->numberBetween(1960, 2022),
                'category' => $faker->word(),
                'info' => $faker->sentences(4, true),
                'summary' => $faker->paragraph(),
                'availability' => $faker->boolean(50)
            ]);
        }
    }
}
