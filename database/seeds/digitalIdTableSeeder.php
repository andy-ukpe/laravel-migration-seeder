<?php

use Illuminate\Database\Seeder;
use App\digitalId;
use Faker\Generator as Faker;

class digitalIdTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i <5 ; $i++) {
        $newDigitalId = new DigitalId ();
        $newDigitalId->name = $faker->name;
        $newDigitalId->birthPlace = $faker->city;
        $newDigitalId->birthDate = $faker->dateTimeBetween($startDate = '-70 years', $endDate = '-16 years', $timezone = null);
        $newDigitalId->sex = $faker->title($gender = null|'male'|'female');
        $newDigitalId->nationalNumber = $faker->idNumber;
      }
    }
}
