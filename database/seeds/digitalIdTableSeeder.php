<?php

use Illuminate\Database\Seeder;
use App\DigitalId;
use Faker\Generator as Faker;

class DigitalIdTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i <5 ; $i++) {
        $newDigitalId = new DigitalId();
        $newDigitalId->name = $faker->name;
        $newDigitalId->birthPlace = $faker->city;
        $newDigitalId->birthDate = $faker->dateTimeBetween('-70 years', '-16 years');
        $newDigitalId->sex = $faker->title($gender = 'male'|'female');
        $newDigitalId->nationalNumber = $faker->randomNumber(8);
        $newDigitalId->save();
      }
    }
}
