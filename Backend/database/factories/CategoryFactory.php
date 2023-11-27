<?php

namespace Database\Factories;

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name"=> $this->faker->name,
            "slug"=> $this->faker->unique()->sentence(),
            "description"=> $this->faker->text(),
            "image" => $this->faker->imageUrl(),
            "meta_description"=> $this->faker->text(),
            "meta_title"=> $this->faker->text,
            "meta_keywords"=> $this->faker->text,
            "created_by"=> User::all()->random()->id
        ];
    }
}
