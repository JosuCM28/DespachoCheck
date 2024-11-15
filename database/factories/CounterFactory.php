<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Counter;
use Faker\Factory as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Counter>
 */
class CounterFactory extends Factory
{
    protected $model = Counter::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $usedUserIds = [];
        $user_id = rand(82, 91);
        while (in_array($user_id, $usedUserIds)) {
            $user_id = rand(82, 91); // Generamos otro user_id si ya existe
        }
        $usedUserIds[] = $user_id;
        $regime_id = rand(1, max: 10);
        $faker = Faker::create();
        $name = $faker->firstname;
        $last_name = $faker->lastname;
        $full_name = $name . ' ' . $last_name;

        return [
            'user_id' => $user_id, // user_id entre 133 y 232
            'phone' => $this->faker->unique()->phoneNumber, // Teléfono único, no opcional
            'name' => $name, // Nombre
            'last_name' => $last_name, // Apellido
            'address' => $this->faker->address, // Dirección (no opcional)
            'rfc' => $this->faker->unique()->regexify('[A-Z]{4}[0-9]{6}[A-Z0-9]{3}'), // RFC único, no opcional
            'curp' => $this->faker->unique()->regexify('[A-Z]{4}[0-9]{6}[A-Z]{6}[0-9]{2}'), // CURP único, no opcional
            'city' => $this->faker->city, // Ciudad (no opcional)
            'state' => $this->faker->state, // Estado (no opcional)
            'cp' => $this->faker->regexify('\d{5}'), // Código postal (no opcional)
            'regime_id' => $regime_id, 
            'birthdate' => $this->faker->dateTimeBetween('-80 years', '-18 years'), // Fecha de nacimiento (no opcional)
            'full_name' => $full_name // Nombre completo
        ];
    }
}
