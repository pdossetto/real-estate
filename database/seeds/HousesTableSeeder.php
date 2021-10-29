<?php

use Illuminate\Database\Seeder;
use App\House;
use Faker\Generator as Faker;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $new_house = new House();
            $new_house->reference = $faker->bothify('??-#?#-##');
            $new_house->address = $faker->streetAddress();
            $new_house->postal_code = $faker->postcode();
            $new_house->city = $faker->city('it_IT');
            $new_house->state = $faker->state();
            $new_house->square_meters = $faker->numberBetween(30,150);
            $new_house->rooms = $faker->numberBetween(1,10);
            $new_house->description = $faker->paragraphs(5, true);
            $new_house->price = $faker->randomFloat(2, 20_000, 1_000_000);
            $new_house->energy_rating = 'A';
            $new_house->save();
        }
    }
}
