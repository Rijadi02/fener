<?php

namespace Database\Factories;

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
            'title' => $this->faker->name(),
            'date' => $this->faker->date(),
            'video_link' => $this->faker->name(),
            'live_link' => $this->faker->name(),
            'courses_id' =>  $this->faker->numberBetween(1,10),
        ];
    }
}