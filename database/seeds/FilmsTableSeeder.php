<?php

use Illuminate\Database\Seeder;
use App\Film;
use App\Genre;

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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Genre::truncate();
        Film::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $faker = \Faker\Factory::create();
        // Create a few film in our database:
        for ($i = 0; $i < 3; $i++) {
            $filmName = $faker->name;
            Film::create([
                'name' => $filmName,
                'description' => $faker->paragraph,
                'release_date' => $faker->date('Y-m-d H:i:s', 'now'),
                'rating' => $faker->numberBetween(1,5),
                'ticket_price' => $faker->numberBetween(0,10000),
                'country' => $faker->country,
                'photo' => $faker->imageUrl(640,489, null, false),
                'slug' => str_slug($filmName, '-')
            ]);
        }
    }
}
