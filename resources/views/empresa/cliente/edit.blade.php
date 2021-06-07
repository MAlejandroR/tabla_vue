
@extends('layout')
@section("contenido")
    <fieldset>
    <form action="{{route('Cliente.update',[$cliente])}}" method="POSt">
        @method("PUT");
       @csrf
        <legend>Datos de cliente</legend>
        Nombre: <input type="text" name="nombre" value="{{$cliente->nombre}}"><br/>
        Dirección: <input type="text" name="direccion" value="{{$cliente->direccion}}" />"<br/>
        Teléfono: <input type="text" name="telefono" value="{{$cliente->telefono}}" /><br/>
        <input type="submit" value="Actualizar">
    </form>
    </fieldset>
@endsection
