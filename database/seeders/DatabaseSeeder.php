<?php

namespace Database\Seeders;

use App\Models\Courses;
use App\Models\Lectures;
use App\Models\User;
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
        $courses = Courses::factory(10)
            ->has(Lectures::factory()->count(3));

        User::factory(3)
            ->has($courses)
            ->create();



    }
}
