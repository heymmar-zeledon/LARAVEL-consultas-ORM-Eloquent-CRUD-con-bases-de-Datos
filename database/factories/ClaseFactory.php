<?php

namespace Database\Factories;

use App\Models\Clase;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClaseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Clase::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $codclase = $this->faker->unique()->postcode(5);
        return[
            'id' => $codclase,
            'nombre' => $this->faker->catchPhrase(),
            'credito' => $this->faker->randomDigitNot(0),
        ];
    }
}
