<?php

namespace Database\Factories;

use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empleado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $estudios =['Sin estudios',
            "ESO", "BACH", "Ciclo Medio",
            "Ciclo Superior", "Universidad", "Doctorado"];

        return [
            'nombre'=>$this->faker->name(),
            'telefono'=>$this->faker->phoneNumber(),
            'direccion'=>$this->faker->address(),
            'estudios'=>$this->faker->randomElement($estudios),
            //
        ];
    }
}
