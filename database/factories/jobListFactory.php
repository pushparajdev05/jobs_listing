<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\jobsList>
 */
class jobListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "cmp_name"=> fake()->company(),
            "position"=> fake()->jobTitle,
            "salary"=> fake()->numberBetween(10000,100000),
            "email"=> fake()->companyEmail(),
            "about"=>fake()->paragraph(4),
        ];
    }
}
