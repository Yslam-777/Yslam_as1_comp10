<?php

namespace Database\Factories;

use App\Models\Restaurant;
use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurant>
 */
class RestaurantFactory extends Factory
{
    protected $model = Restaurant::class;

    public function definition(): array
    {
        return [
            "city_id" => City::factory(),
            "name" => $this->faker->company,
            "address" => $this->faker->address,
            "description" => $this->faker->paragraph,
        ];
    }
}
