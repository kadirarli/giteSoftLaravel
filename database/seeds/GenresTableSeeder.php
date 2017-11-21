<?php

use Illuminate\Database\Seeder;
use App\Genre;
use App\Film;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate our existing records.
        // Genre::truncate();
        $faker = \Faker\Factory::create();
        // Create a few film in our database:

        for ($i = 0; $i < 10; $i++) {

            $films = Film::orderByRaw("RAND()")->first();

            Genre::create([
                'film_id' => $films->id,
                'name' => $faker->name,
            ]);
        }
    }
}
