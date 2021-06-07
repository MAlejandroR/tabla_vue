<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //Obtenemos todos los clientes
        $clientes = Cliente::all();
        $campos =$clientes[0]->getAttributes();
        unset($campos['created_at']);
        unset($campos['updated_at']);
        $campos=array_keys($campos);


        return view("empresa.cliente.listado",
            ["filas"=> $clientes,
            "campos"=> $campos])
            ;


        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("empresa.cliente.create");
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente($request->input());
        $cliente->saveOrFail();

        return (redirect(route("Cliente.index")));





        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {

        return view("empresa.cliente.show",['cliente'=>$cliente]);
        return redirect("cliente.index");
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        $cliente = Cliente::where (["id"=>$id])->first();


        return view("empresa.cliente.edit",['cliente'=>$cliente]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,int   $id)
    {
        $cliente = Cliente::where(["id"=>$id])->first();
        $cliente->fill($request->input());
        $cliente->save();

        return (redirect(route("Cliente.index")));
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $cliente = Cliente::where(["id"=>$id])->first();
        $cliente->delete();
        $clientes = Cliente::all();
        return (response()->json($clientes));

        //
    }
}
