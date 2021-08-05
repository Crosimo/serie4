<?php

namespace Database\Seeders;

use App\Models\Fruit;
use App\Models\Legume;
use Faker\Factory;
use Illuminate\Database\Seeder;

class LegumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $arr = ["salade", "artichaud", "petit-pois", "radis", "aubergine"];
        for($i = 0; $i <count($arr); $i++ ){
            Legume::create([
                "name" => $arr[$i],
                "quantité"=> $faker->randomDigitNotNull(),
            ]);
        }
    }
}
