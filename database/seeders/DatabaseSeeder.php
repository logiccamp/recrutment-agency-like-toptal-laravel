<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        for ($i = 0; $i < 101; $i++) {
            $this->call([
                JobSeeder::class,
            ]);
        }
    }
}
