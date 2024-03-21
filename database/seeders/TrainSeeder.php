<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            
            // add train model
            $train = new Train();

            // train attributes 
            $train->company = ;
            $train->departure_station = ;
            $train->arrival_station = ;
            $train->departure_hours = ;
            $train->arrival_hours = ;
            $train->train_code = ;
            $train->n_carriages = ;
            $train->is_late = ;
            $train->is_canceled = ;
            $train->n_sits = ;

            $train->save();
        }

    }
}
