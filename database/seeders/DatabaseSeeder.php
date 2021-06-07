<?php

namespace Database\Seeders;

use App\Models\Courses;
use App\Models\Lectures;
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
        Courses::factory(10)
            ->has(Lectures::factory()->count(3))
            ->create();
    }
}
