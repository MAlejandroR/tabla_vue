<?php

namespace Database\Seeders;

use App\Models\FacturaCliente;
use Illuminate\Database\Seeder;
use App\Models\Factura;
use App\Models\Cliente;
use Illuminate\Support\Arr;

class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factura::factory()->count(200)->create()
        ->each(function($factura){
            $clientes = Cliente::all('id')->toArray(); //Array con todos los id de la tabla cliente.
            $numeroClientes = rand(1,4);
            $clientesFactura = Arr::random ($clientes, $numeroClientes);
            foreach ($clientesFactura as $facturaDelCliente){
                $facturaCliente = new FacturaCliente();
                $facturaCliente->cliente_id = $facturaDelCliente['id'];
                $facturaCliente->factura_id = $factura->id;
                $facturaCliente->saveOrFail();
            }
        });


        ;

        //
    }
}
