<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company' => $this->faker->company(),
            'title' => $this->faker->title(),
            'url' => $this->faker->url(),
            'location' => $this->faker->city(),
            'offerStatus' => $this->faker->randomElement(['In progress', 'Complete'])
        ];
    }
}
