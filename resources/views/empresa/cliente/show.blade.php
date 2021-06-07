@extends('layout')
@section("contenido")
    <fieldset>
        <legend>Datos de cliente</legend>
        Nombre: {{$cliente->nombre}}<br/>
        Direccion: {{$cliente->direccion}}<br/>
        Teléfono: {{$cliente->telefono}}<br/>
    </fieldset>



@endsection
