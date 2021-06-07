@extends('layout')
@section("menu")
<nav class="mx-3">
    <x-form.a href="{{route('Cliente.create')}}">
        Nuevo Clientes
    </x-form.a>
    <x-form.a href="{{route('empresa')}}">
        Voler página principal
    </x-form.a>
</nav>

@endsection
@section("contenido")

    <tablanew filas_serializadas='@json($filas)' campos_serializados='@json($campos)' nombre_tabla='Cliente'>

    </tablanew>


@endsection
