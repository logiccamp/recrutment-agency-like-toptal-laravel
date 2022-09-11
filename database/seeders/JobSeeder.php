<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $rand = $faker->numberBetween(1, 2);
        $mode = [
            "Hour",
            "Month"
        ];
        DB::table("jobs")->insert([
            "title" => $faker->jobTitle(),
            "category_id" => $faker->numberBetween(9, 13),
            "duration" => $faker->randomNumber(),
            "rate" => $faker->numberBetween(10, 100),
            "description" => $faker->paragraph(),
            "location" => $faker->city(),
            "company" => $faker->company(),
            "paymentMode" => $mode[$rand == 1 ? 0 : 1],
        ]);
    }
}
