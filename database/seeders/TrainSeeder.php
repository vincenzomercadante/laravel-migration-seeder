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
    public function run()
    {
        // ! seeding with faker generator
        // for ($i = 0; $i < 5; $i++) {
            
        //     // add train model
        //     $train = new Train();

        //     // train attributes faker generator
        //     $train->company = $faker->randomElement(['Trenitalia', 'Italo']);
        //     $train->departure_station = $faker->city();
        //     $train->arrival_station = $faker->city();
        //     $train->departure_hours = $faker->dateTime();
        //     $train->arrival_hours = $faker->dateTime();
        //     $train->train_code = $faker->password(15,15);
        //     $train->n_carriages = $faker->numberBetween(5,10);
        //     $train->is_late = $faker->numberBetween(0,1);
        //     $train->is_canceled = $faker->numberBetween(0,1);
        //     $train->n_sits = $faker->numberBetween(30,100);

        //     // save generated file on database
        //     $train->save();
        // }

        // ! seeding data from csv file

        // open csv file
        $file = fopen(__DIR__ . "/../csv/trains.csv", 'r');

        // first row toggle
        $first_row = true;

        // do the code unless the stream is completed
        while(!feof($file)){
            // translate stream on array
            $train_data = fgetcsv($file);

            if(!$first_row){

                // instance of train model
                $train = new Train();

                // train attributes values
                $train->company = $train_data[0];
                $train->departure_station = $train_data[1];
                $train->arrival_station = $train_data[2];
                $train->departure_hours = $train_data[3];
                $train->arrival_hours = $train_data[4];
                $train->train_code = $train_data[5];
                $train->n_carriages = $train_data[6];
                $train->is_late = $train_data[7];
                $train->is_canceled = $train_data[8];
                $train->n_sits = $train_data[9];
            
                // save data on database
                $train->save();
                
            }
            $first_row = false;
        }
    }

}

