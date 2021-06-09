<?php

namespace Database\Factories;

use App\Models\Lectures;
use App\Models\Materials;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaterialsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Materials::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'link' => $this->faker->url(),
            'lectures_id' => function() {
                return Lectures::all()->random();
        }
        ];
    }
}
