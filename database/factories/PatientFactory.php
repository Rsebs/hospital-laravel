<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'document' => $this->faker->randomNumber(5),
            'first_name' => $this->faker->firstName(),
            'second_name' => $this->faker->optional()->firstName(),
            'first_last_name' => $this->faker->lastName(),
            'second_last_name' => $this->faker->optional()->firstName(),
            'email' => $this->faker->optional()->safeEmail(),
            'gender_id' => $this->faker->randomElement(['1', '2']),
            'contact_number' => $this->faker->optional()->randomNumber(5)
        ];
    }
}
