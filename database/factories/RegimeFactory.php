<?php

namespace Database\Factories;

use App\Models\Regime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Regime>
 */
class RegimeFactory extends Factory
{
    protected $model = Regime::class;

    public function definition()
    {
        return [
            // Definir los campos de la tabla 'regimes', ajusta según la estructura de tu modelo
            'title' => $this->faker->word, // Un nombre ficticio
        ];
    }
}