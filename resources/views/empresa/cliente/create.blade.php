@extends("layout")

@section("menu")


@endsection
@section("contenido")
    <form action="{{route("Cliente.store")}}" method="POST">
        @csrf

        Nombre <input type="text" name="nombre" id=""><br />
        Dirección <input type="text" name="direccion" id=""><br />
        Teléfono <input type="text" name="telefono" id=""><br />
        <input type="submit" value="Guardar">



    </form>
@endsection

