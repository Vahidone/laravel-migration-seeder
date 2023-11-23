<?php

namespace Database\Seeders;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 100; $i++){

            $train = new Train();
            $train->company = $faker->word(3, true);
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->dateTimeInInterval('+1 day', '+2 day');
            $train->arrival_time = $faker->dateTimeInInterval('+1 day', '+2 day');
            $train->train_code = $faker->numberBetween(1, 220);
            $train->carriage_number = $faker->numberBetween(3, 12);
            $train->on_time = $faker->boolean();
            $train->canceled = $faker->boolean();

            $train->save();

        }

    }
}
