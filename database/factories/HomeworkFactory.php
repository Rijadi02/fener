<?php

namespace Database\Factories;

use App\Models\Homework;
use App\Models\Lectures;
use Illuminate\Database\Eloquent\Factories\Factory;

class HomeworkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Homework::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
                'file' => $this->faker->name(),
                'deadline' => $this->faker->date(),
                'lecture_id' => function() {
                    return Lectures::all()->random();
                }
        ];
    }
}
