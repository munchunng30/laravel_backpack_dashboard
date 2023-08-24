<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->name,
            'idtype1' => fake()-> randomElement(['New IC','Old IC','Passport Number']),
            'id1' => fake()->text(10),
            'add_line1' => fake()->text(10),
            'add_line2' => fake()->text(10),
            'add_line3' => fake()->text(10),
            'add_line4' => fake()->text(10),
            'add_postcode'=>fake()->postcode(),
            'add_state' => fake()-> randomElement(['Selangor','Penang','Kuala Lumpur']),
            'email' => fake()->email(),
            'dob' => fake()->dateTimeBetween('-20 years'),
            'add_country' => fake()->country(),
            'created_at' => fake()->dateTimeBetween('-1 years'),
            'updated_at' => fake()->dateTimeBetween('created_at','now')
        ];
    }
}
