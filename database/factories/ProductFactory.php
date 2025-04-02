<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\Restaurant;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected  $model = Product::class;

    public function definition(): array
    {
        return [
            "restaurant_id" => Restaurant::factory(),
            "category_id" => Category::factory(),
            "name" => $this->faker->foodMane,
            "description" => $this->faker->sentence,
            "price" => $this->faker->randomFloat(2,5,1000),
        ];
    }
}
