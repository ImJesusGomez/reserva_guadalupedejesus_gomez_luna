<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre_sala' => fake()->lastName(),
            'fecha_reserva' => fake()->date(),
            'hora_inicio' => fake()->numberBetween(0, 24),
            'hora_fin' => fake()->numberBetween(0, 24),
            'nombre_cliente' => fake()->lastName(),
        ];
    }
}
