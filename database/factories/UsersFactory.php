<?php

namespace Database\Factories;

use App\Models\Users;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Users>
 */
class UsersFactory extends Factory
{
    protected $model = Users::class;
    public function definition()
    {
        return [
            "name" => $this->faker->name,
            "email" => $this->faker->unique()->safeEmail,
            "password" => bcrypt("password"),

        ];
    }
}
