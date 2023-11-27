<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Post::class;
    public function definition(): array
    {
        return [
            "title"=> $this->faker->title(),
            "slug"=> $this->faker->unique()->sentence(),
            "description"=> $this->faker->paragraph(),
            "meta_description"=> $this->faker->paragraph(),
            "meta_title"=> $this->faker->text(),
            "meta_keywords"=> $this->faker->text(),
            "iframe"=> $this->faker->text(),
            "user_id"=> User::all()->random()->id,
            "category_id"=> Category::all()->random()->id
        ];
    }
}
