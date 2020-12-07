@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <h5 class="mb-4">REGISTROS DE PRODUCTOS</h5>
        <div class="col-12 table-responsive">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th>Nombre </th>
                <th>Stock</th>
                <th>Precio Anterior</th>
                <th>Precio Actual</th>
                <th>Fecha Ingreso</th>
                <th>Descripcion</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($producto as $k)
              <tr>
              <th scope="row">{{$k->id}}</th>
                <td>{{$k->nombre}}</td>
                <td>{{$k->stock}}</td>
                <td>{{$k->precioAnterior}}</td>
                <td>{{$k->precioActual}}</td>
                <td>{{$k->created_at}}</td>
                <td>{{$k->descripcionCorta}}</td>
                <td>
                  <a href="{{ route('producto.editar', $k->id ) }}"><button type="button" class="btn btn-primary btn-sm">Editar</button></a>
                  
                  <form action="{{ route('producto.eliminar', $k->id ) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>  

        </div>
    </div>
    {{ $producto->links() }}
</div>
@endsection