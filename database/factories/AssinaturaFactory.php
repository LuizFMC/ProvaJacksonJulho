<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Assinatura;

class AssinaturaFactory extends Factory
{
    protected $model = Assinatura::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->company,
            'preco' => $this->faker->randomFloat(2, 100, 1000), 
            'duracao' => $this->faker->numberBetween(1,12),
        ];
    }
}