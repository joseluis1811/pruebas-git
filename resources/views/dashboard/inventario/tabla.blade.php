@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
          <h5 class="mb-4">INVENTARIOS REGISTRADOS</h5>
            <div class="col-12 table-responsive">
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th>#</th>
                    <th>Existencia inicial</th>
                    <th>Entrada</th>
                    <th>Salida</th>
                    <th>Stock</th>
                    <th>Descripcion</th>
                    <th>Fecha Ingreso</th>
                    <th>Opciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($inventario as $inv)
                  <tr>
                  <th scope="row">{{$inv->id}}</th>
                    <td>{{$inv->existencia_inicial}}</td>
                    <td>{{$inv->entrada}}</td>
                    <td>{{$inv->salida}}</td>
                    <td>{{$inv->stock}}</td>
                    <td>{{$inv->nombre}}</td>
                    <td>{{$inv->created_at}}</td>
                    <td>
                      <a href="{{ route('editar.iventario', $inv->id ) }}"><button type="button" class="btn btn-primary btn-sm">Editar</button></a>
                      
                      <form action="{{ route('eliminar.inventario', $inv->id ) }}" method="POST">
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
            {{ $inventario->links() }}
    </div>
@endsection