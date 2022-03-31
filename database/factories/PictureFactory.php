<?php

namespace Database\Factories;

use App\Models\Categories;
use App\Models\User;
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
        $categories = Categories::all()->pluck('id')->toArray();
        $user = User::all()->pluck('id')->toArray();
        return [
            'url' => $this->faker->url(),
            'user_id' => $this->faker->randomElement($user),
            'categories_id' => $this->faker->randomElement($categories),
            'title' => $this->faker->realText(10),
            'description' => $this->faker->realText(50),
            'caption' => $this->faker->realText(50),
            'image' => $this->faker->image('public/storage/uploads',640,480, null, false)
        ];
    }
}
