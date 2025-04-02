<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */

{
    protected $model = City::class;
    public function definition()
    {
        return [
            "name" => $this->faker->city,
        ];
    }
}
