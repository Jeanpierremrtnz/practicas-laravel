<?php

namespace Database\Factories;

use App\Models\Estudiante;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstudianteFactory extends Factory
{
    protected $model = Estudiante::class;

    public function definition()
    {
        return [
            'codigo' => $this->faker->unique()->numerify('2024####'),
            'nombres' => $this->faker->firstName,
            'apellidos' => $this->faker->lastName,
            'fecha_nacimiento' => $this->faker->date(),
            'email' => $this->faker->unique()->safeEmail,
            'programa' => $this->faker->randomElement(['Ingeniería', 'Medicina', 'Derecho'])
        ];
    }
}
