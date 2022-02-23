<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
        $comic = new Comic();
        $comic->title = $faker->words(3, true);
        $comic->author = $faker->words(2, true);
        $comic->genre =  $faker->word();
        $comic->description = $faker->text();
        $comic->price = $faker->randomfloat(1, 20, 50);
        $comic->save();
        }
    }
}