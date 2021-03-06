<?php

namespace Database\Factories;

use App\Models\Courses;
use App\Models\Lectures;
use Illuminate\Database\Eloquent\Factories\Factory;

class LecturesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lectures::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'date' => $this->faker->date(),
            'video_link' => $this->faker->url(),
            'live_link' => $this->faker->url(),
            'courses_id' => function() {
                    return Courses::all()->random();
            }
        ];
    }
}
