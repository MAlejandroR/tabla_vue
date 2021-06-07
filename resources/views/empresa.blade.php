@extends('layout')
@section("menu")
    <nav class="mx-3">

        <x-form.a href="{{route('Cliente.index')}}">
            Clientes
        </x-form.a>
        <x-form.a href="{{route('Factura.index')}}">
            Facturas
        </x-form.a>
        <x-form.a href="{{route('Empleado.index')}}">
            Empleados
        </x-form.a>


    </nav>


@endsection
@section("contedido")
    <h1>Esto es el contenido de la empresa</h1>
@endsection
