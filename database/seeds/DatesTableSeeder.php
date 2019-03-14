<?php

use App\dates;
use Faker\Factory;
use Illuminate\Database\Seeder;

class DatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        dates::truncate();
        $faker = Factory::create();

        for ($i = 0; $i < 50; $i++) {
            dates::create([
                'user' => $faker->numberBetween(0,20),
                'date' => $faker->date('Y-m-d','now'),
                'message' => $faker->sentence,
            ]);
        }
        
    }
}
