<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Empresa;

class EmpresaFactory extends Factory
{
    protected $model = Empresa::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->company,
            'endereco' => $this->faker->address,
            'telefone' => $this->faker->phoneNumber,
        ];
    }
}