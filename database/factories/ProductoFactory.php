<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codigo' => 'P'.$this->faker->randomFloat(0,1000000,9999999),
            'nombre' => $this->faker->sentence(3),
            'descripcion' => $this->faker->sentence(4),
            'precio_porcentaje' => $this->faker->randomFloat(0,0,100),
            'stock_min' => $this->faker->randomFloat(0,1,10),
            'stock_max' => $this->faker->randomFloat(0,50,100),
        ];
    }
}
