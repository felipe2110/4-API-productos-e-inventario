<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\products;
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i =0; $i<=100;$i++){
            products::create([
            'name' => $faker->name,
            'description' => $faker->text,
            'price' => $faker->numberBetween($min = 1500, $max = 6000),
            'image' => $faker->imageUrl
        ]);
    }}
}
