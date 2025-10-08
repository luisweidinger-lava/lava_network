<?php

namespace Database\Factories;

use App\Models\Offer;
use App\Models\User;
use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

class OfferFactory extends Factory
{
    protected $model = Offer::class;

    public function definition(): array
    {
        return [
            // These lines will also create a user/city if not provided from outside:
            'user_id' => User::factory(),
            'city_id' => City::factory(),

            'title' => $this->faker->streetName().' Apartment',
            'body' => $this->faker->paragraph(),
            'rent' => $this->faker->numberBetween(600, 2400),
            'size' => $this->faker->numberBetween(18, 120),
            'available_from' => $this->faker->dateTimeBetween('now', '+6 months')->format('Y-m-d'),
        ];
    }
}

