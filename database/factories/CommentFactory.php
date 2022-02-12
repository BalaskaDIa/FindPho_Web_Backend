<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'picture_id' => 1,
            'title' => $this->faker->realText(10),
            'description' => $this->faker->realText(50),
            'created_at' => $this->faker->date('Y-m-d'),
            'updated_at' => $this->faker->date('Y-m-d'),
        ];
    }
}
