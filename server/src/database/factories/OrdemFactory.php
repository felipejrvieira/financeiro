<?php

namespace Database\Factories;

use App\Models\Ordem;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class OrdemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ordem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'acao_id'=>$this->faker->numberBetween(1, 5),
            'user_id'=>$this->faker->numberBetween(1, 2),
            'fato_id'=>null,
            'tipo'=>Arr::random(['C','V']),
            'efetuado_em'=>now(),
            'quantidade'=>$this->faker->numberBetween(1, 1000),
            'preco'=>$this->faker->randomFloat(2, 10, 30),
            'taxa'=>$this->faker->randomFloat(2, 0, 10),
        ];
    }
}
