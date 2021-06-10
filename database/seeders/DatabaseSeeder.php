<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Courses;
use App\Models\Gallery;
use App\Models\Homework;
use App\Models\Lectures;
use App\Models\Library;
use App\Models\Materials;
use App\Models\Tickets;
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
        Homework::factory(100)->create();
        Materials::factory(100)->create();
        Gallery::factory(10)->create();
        Blog::factory(15)->create();
        Library::factory(9)->create();
        Tickets::factory(7)->create();

    }
}
