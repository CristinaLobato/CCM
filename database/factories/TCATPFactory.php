<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TCATP>
 */
class TCATPFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fecha_validez' => $this->faker->date,
            'numero_serie' => $this->faker->randomNumber(),
            'caducidad' => $this->faker->date,
            'codigo_susp' => $this->faker->randomNumber(),

        ];
    }
}
