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
        'email' => fake()->unique()->safeEmail(),
        'endereco' => fake()->address(),
        'genero' => fake()->randomElement(['Masculino', 'Feminino', 'Outro']),
        'cargo' => fake()->jobTitle(),
        'telefone' => fake()->numerify('(##) #####-####'),
        'cpf' => fake()->numerify('###.###.###-##'),
        // 'idade' => fake()->numberBetween(18, 65),
        // 'data_contratacao' => fake()->date(),
        // 'salario' => fake()->randomFloat(2, 2000, 10000),
        ];
    }
}