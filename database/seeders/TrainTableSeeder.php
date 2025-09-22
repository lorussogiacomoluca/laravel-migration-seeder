<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 20; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->randomElement(['Trenitalia', 'Trenord', 'Italo', 'Frecciarossa', 'Intercity']);
            $newTrain->departure_station  = $faker->city();
            $newTrain->arrival_station  = $faker->city();
            $newTrain->departure_time  = $faker->time();
            $newTrain->arrival_time  = $faker->time();
            $newTrain->train_code = $faker->bothify('TR###');
            $newTrain->on_time  = $faker->boolean();
            $newTrain->cancelled  = $faker->boolean();
            $newTrain->carriages = $faker->numberBetween(1, 10);
            $newTrain->save();
        }
    }
}
