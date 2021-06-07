@extends("layout");
@section("contenido")


    <tabla_new campos_serializados='@json($campos)' filas_serializadas='@json($clientes)'
           nombre_tabla="Clientes">
    </tabla_new>
@endsection
