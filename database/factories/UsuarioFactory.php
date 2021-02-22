<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UsuarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Usuario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'documento' => 'V-'.$this->faker->randomFloat(0,999999, 99999999),
            'nombre' => $this->faker->lastName ,
            'apellido' => $this->faker->lastName,
            'direccion' => $this->faker->sentence(4),
            'telefono' => $this->faker->randomFloat(0,999999999,9999999999),
            'email' =>$this->faker->unique()->email,
            'usuario' => $this->faker->unique()->userName,
            'password' => $this->faker->password(8),
            // 'password' => Str::random(12),

        ];
    }
}
