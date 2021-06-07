@extends('layout')
@section("menu")
    <nav class="mx-3">
        <x-form.a href="{{route('Empleado.create')}}">
            Nuevo empleado
        </x-form.a>
        <x-form.a href="{{route('empresa')}}">
            Voler página principal
        </x-form.a>
    </nav>

@endsection
@section("contenido")
    <tablanew filas_serializadas='@json($filas)' campos_serializados='@json($campos)' nombre_tabla='Empleado'>

    </tablanew>
@endsection
