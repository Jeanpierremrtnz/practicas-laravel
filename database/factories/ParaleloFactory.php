<?php

namespace Database\Factories;

use App\Models\Paralelo;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParaleloFactory extends Factory
{
    protected $model = Paralelo::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->unique()->bothify('P?##'),
            'horario' => $this->faker->randomElement(['Lunes 8:00', 'Martes 10:00']),
            'aula' => $this->faker->bothify('AULA-##')
        ];
    }
}
