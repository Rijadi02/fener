<?php

namespace Database\Seeders;

use App\Models\Courses;
use App\Models\Homework;
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
        User::factory(4)->create();
        Courses::factory(10)->create();
        Lectures::factory(100)->create();


    }
}
