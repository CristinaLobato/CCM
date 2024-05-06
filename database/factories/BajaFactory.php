<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Baja>
 */
class BajaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fecha_baja' => $this->faker->date,
            'motivo' => $this->faker->sentence,
            'baja_certificado' => $this->faker->boolean,
        ];
    }
}
