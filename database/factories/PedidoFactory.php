<?php

namespace Database\Factories;

use App\Models\Editorial;
use Illuminate\Database\Eloquent\Factories\Factory;

class PedidoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'fecha' => fake()->date(),
            'estado' => fake()->randomElement([
                'activo',
                'cancelado',
                'enviado',
            ]),
            'editorial_id' => Editorial::factory(),
        ];
    }
}
