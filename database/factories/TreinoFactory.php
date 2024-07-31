<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Treino>
 */
class TreinoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome'=> $this->faker->word(),
            'tipo' => $this->faker->randomElement([
                'supino',
                'leg press',
                'rosca martelo',
                'agachamento',
                'puxada frontal',
                'elevação lateral',
                'flexão de braço',
                'remada',
                'flexão de pernas',
                'desenvolvimento militar',
                'crucifixo',
                'cadeira extensora',
                'cadeira flexora',
                'elevação de panturrilha',
                'abdominal',
                'flexão de tronco',
                'salto vertical',
                'burpee',
                'afundo',
                'elevação de pernas',
            ]),
            'series'=> $this->faker->numberBetween(1,3),
            'reps'=> $this->faker->numberBetween(1,3),
            
        ];
    }
}
