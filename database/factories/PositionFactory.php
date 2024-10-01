<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Position>
 */
class PositionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'salary' =>  random_int(1000 , 200000),
            'location' => fake()->randomElement(["Remontly" , "On-Site"]),
            'schedule' => fake()->randomElement(['Full Time', 'Part Time', 'Contract']),
            'url' => fake()->url(),
            'featured' => fake()->boolean(20),
            'employer_id' => \App\Models\Employer::factory(),
            'created_at' => Carbon::now() ,
            'updated_at' => Carbon::now() ,
        ];

    }
}
