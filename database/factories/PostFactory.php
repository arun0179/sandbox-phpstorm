<?php

namespace Database\Factories;

use App\Models\post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText(100),
            'content' => $this->faker->realText(300),
            'view_count' =>$this->faker->numberBetween(0,10000)
        ];
    }
}
