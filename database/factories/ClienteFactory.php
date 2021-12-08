<?php

namespace Database\Factories\Models\Cliente;

use App\Models\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->unique()->name(),
            'apelido'=>$this->faker->unique()->word,
            'contacto'=>845165855,
        ];
        
    }
}
