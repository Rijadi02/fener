<?php

namespace Database\Factories;

use App\Models\Courses;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CoursesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Courses::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
            return [
                'title' => $this->faker->sentence(),
                'img' => "http://lorempixel.com/400/200/sports/",
                'description' => $this->faker->sentence(),
                'price' =>  $this->faker->numberBetween(1,500),
                'user_id' => function() {
                    return User::all()->random();
                },
            ];
    }
}
