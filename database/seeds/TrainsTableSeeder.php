<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create('it_IT');

        for ($i=0; $i < 50 ; $i++) { 
            
            $newTrain = new Train();
            $newTrain->company = $faker->randomElement(['Trenitalia SpA', 'Italo', 'Interjet Srl', 'Getras Srl', 'Trenord SpA']);
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->regexify('[A-Za-z0-9]{20}');
            $newTrain->number_carriages= rand(5,50);
            $newTrain->in_time = $faker->boolean();
            $newTrain->deleted = $faker->boolean();
            $newTrain->save();
        }
    }
}
