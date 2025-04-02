<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Reservation;
use App\Models\Users;
use App\Models\Restaurant;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    protected $model = Reservation::class;
    public function definition(): array
    {
        return [
            "user_id" => Users::factory(),
            "restaurant_id" => Restaurant::factory(),
            "date" => $this->faker->date,
            "time" => $this->faker->time,
            "guest_count" => $this->faker->numberBetween(1,10),
        ];
    }
}
