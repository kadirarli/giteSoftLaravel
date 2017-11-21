<?php

use Illuminate\Database\Seeder;
use App\Film;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate our existing records.
        // Film::truncate();
        $faker = \Faker\Factory::create();
        // Create a few film in our database:
        for ($i = 0; $i < 3; $i++) {
            Film::create([
                'name' => $faker->name,
                'description' => $faker->paragraph,
                'release_date' => $faker->date('Y-m-d H:i:s', 'now'),
                'rating' => $faker->numberBetween(1,5),
                'ticket_price' => $faker->numberBetween(0,10000),
                'country' => $faker->country,
                'photo' => $faker->imageUrl(640,489, null, false),
            ]);
        }
    }
}
