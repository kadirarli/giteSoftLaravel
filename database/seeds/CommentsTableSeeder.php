<?php

use Illuminate\Database\Seeder;
use App\Comment;
use App\Film;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate our existing records.
        Comment::truncate();
        $faker = \Faker\Factory::create();
        // Create a few comment in our database:

        $films = Film::all();

        foreach ($films as $film){
            Comment::create([
                'film_id' => $film->id,
                'name' => $faker->name,
                'comment' => $faker->text(180),

            ]);
        }
    }
}
