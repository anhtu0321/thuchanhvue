<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\customer;
class customerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        foreach(range(1, 50) as $i){
            customer::create([
                'name'   => $faker->name,
                'company' => $faker->company,
                'address' => $faker->address,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
            ]);
        };
    }
}
