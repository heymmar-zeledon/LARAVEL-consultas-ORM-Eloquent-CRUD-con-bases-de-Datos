<?php

namespace Database\Factories;

use App\Models\Profesor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class ProfesorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profesor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $persona = [$this->faker->firstNameMale,$this->faker->firstNameFemale];
        
        $titulos = ['LIC','ING','MSC','DOC'];
        return [
            'nombre' => Arr::random($persona),
            'apellido' => $this->faker->lastName,
            'titulo' => Arr::random($titulos),
        ];
    }
}
