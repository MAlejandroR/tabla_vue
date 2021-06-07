<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Empleado;
use App\Models\Idioma;
use Illuminate\Support\Arr;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Empleado::factory()->count(10)->create()
            ->each(function($empleado){
                $idiomas =['Francés', 'Alemán', 'Italiano', 'Rumano', 'Portugués'];
                $numeroIdiomas = rand(1,3);
                $idiomasHablados = Arr::random($idiomas, $numeroIdiomas);
                foreach ($idiomasHablados as $idiomaEmpleado){
                    $idioma = new Idioma();
                    $idioma->idioma = $idiomaEmpleado;
                    $idioma->empleado = $empleado->id;
                    $idioma->saveOrFail();
                }
            });






        //
    }
}
