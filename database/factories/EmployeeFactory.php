<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'name' => fake()->name(),
        'cpf' => fake()->numerify('###.###.###-##'),
        'idade' => fake()->numberBetween(18, 65),
        'genero' => fake()->randomElement(['Masculino', 'Feminino', 'Outro']),
        'email' => fake()->unique()->safeEmail(),
        'telefone' => fake()->numerify('(##) #####-####'),
        'endereco' => fake()->address(),
        'data_contratacao' => fake()->date(),
        'salario' => fake()->randomFloat(2, 2000, 10000),
        'cargo' => fake()->jobTitle(),
        ];
    }
}