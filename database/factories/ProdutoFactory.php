<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Empresa;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->word(),
            'valor' => $this->faker->randomFloat(),
            'qtd' => $this->faker->randomDigit(),
            'qtdestoque' => $this->faker->randomDigit(),
            'empresa_id' => Empresa::inRandomOrder()->first()->id,
        ];
    }
}
