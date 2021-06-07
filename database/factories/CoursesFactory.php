<?php

namespace Database\Factories;

use App\Models\Courses;
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
                'title' => $this->faker->name(),
                'img' => $this->faker->unique()->safeEmail(),
                'description' => $this->faker->name(),
                'price' =>  $this->faker->numberBetween(1,5),
                'teacher_id' =>  $this->faker->numberBetween(1,10),
            ];
    }
}
