<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Picture>
 */
class PictureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url' => $this->faker->url(),
            'user_id' => $this->faker->numberBetween(1,10),
            'title' => $this->faker->realText(10),
            'description' => $this->faker->realText(50),
            'caption' => $this->faker->realText(50),
            'created_at' => $this->faker->date('Y-m-d'),
            'updated_at' => $this->faker->date('Y-m-d'),
        ];
    }
}
