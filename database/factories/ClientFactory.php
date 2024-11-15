<?php

namespace Database\Factories;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    protected $model = Client::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $usedUserIds = [];
        $user_id = rand(2, 81);
        while (in_array($user_id, $usedUserIds)) {
            $user_id = rand(2, 81); // Generamos otro user_id si ya existe
        }
        $usedUserIds[] = $user_id;
        $regime_id = rand(1, 10);
        $faker = Faker::create();
        $name = $faker->firstname;
        $last_name = $faker->lastname;
        $full_name = $name . ' ' . $last_name;
        return [
            'user_id' => $user_id, // Asignar un ID de usuario aleatorio entre 133 y 232
            'counter_id' => $this->faker->numberBetween(1, 10), // Asignar un ID de contador aleatorio
            'regime_id' => $regime_id, // Asignar un régimen ficticio
            'status' => $this->faker->randomElement(['active', 'inactive']), // Estatus requerido
            'phone' => $this->faker->unique()->numerify('##########'), // Teléfono único y de 10 dígitos
            'name' => $name, // Nombre requerido
            'email' => $this->faker->unique()->safeEmail, // Email único
            'last_name' => $last_name, // Apellido requerido
            'address' => $this->faker->address, // Dirección requerida
            'rfc' => $this->faker->unique()->regexify('[A-Z]{4}[0-9]{6}[A-Z0-9]{3}'), // RFC único con formato
            'curp' => $this->faker->unique()->regexify('[A-Z]{4}[0-9]{6}[A-Z]{6}[0-9]{2}'), // CURP único con formato
            'city' => $this->faker->city, // Ciudad requerida
            'state' => $this->faker->state, // Estado requerido
            'cp' => $this->faker->regexify('\d{5}'), // Código postal, 5 dígitos
            'nss' => $this->faker->regexify('\d{11}'), // NSS de 11 dígitos
            'note' => $this->faker->text(200), // Nota de hasta 200 caracteres
            'token' => strtoupper(Str::random(8)), // Token requerido, único y de 8 caracteres
            'birthdate' => $this->faker->dateTimeBetween('-80 years', '-18 years'),
            'full_name' => $full_name
        ];
    }
}
