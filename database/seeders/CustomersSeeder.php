<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 5; $i++) {
            DB::table('Customers')->insert([
                'CompanyName' => $faker->company,
                'ContactName' => $faker->name,
                'ContactTitle' => $faker->lastName,
                'Address' => $faker->streetAddress,
                'City' => $faker->city,
                'Region' => $faker->state,
                'PostalCode' => $faker->postcode,
            ]);
        }
    }
}
