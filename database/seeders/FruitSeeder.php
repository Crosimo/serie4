<?php

namespace Database\Seeders;

use App\Models\Fruit;
use Faker\Factory;
use Illuminate\Database\Seeder;

class FruitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $arr = ["orange", "pomme", "citron", "poire", "goyave"];
        for($i = 0; $i <count($arr); $i++ ){
            Fruit::create([
                "name" => $arr[$i],
                "quantité"=> $faker->randomDigitNotNull(),
            ]);
        }
    }
}
