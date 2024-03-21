<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 5; $i++) {
            
            // add train model
            $train = new Train();

            // train attributes faker generator
            $train->company = $faker->randomElement(['Trenitalia', 'Italo']);
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_hours = $faker->dateTime();
            $train->arrival_hours = $faker->dateTime();
            $train->train_code = $faker->password(15,15);
            $train->n_carriages = $faker->numberBetween(5,10);
            $train->is_late = $faker->numberBetween(0,1);
            $train->is_canceled = $faker->numberBetween(0,1);
            $train->n_sits = $faker->numberBetween(30,100);

            // save generated file on database
            $train->save();
        }

    }
}
