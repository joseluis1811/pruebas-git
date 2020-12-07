@extends('layouts.app')

@section('content')

    <div class="container">
    {{-- @include('alerta') --}}
      <form action=" {{ route('actualizar.inventario', $inventario->id ) }} " method="POST">
        @csrf
        <div class="form-group">
          <label for="cantidad_inicial">Existencia Inicial</label>
          <input type="number" name="existencia_inicial" class="form-control" id="cantidad_inicial" value="{{$inventario->existencia_inicial}}">
        </div>
        <div class="form-group">
          <label for="Entrada">Entrada</label>
          <input name="entrada" type="number" class="form-control" id="Entrada" value="{{$inventario->entrada}}">
        </div>
        <div class="form-group">
          <label for="salida">Salida</label>
          <input name="salida" type="number" class="form-control" id="salida" value="{{$inventario->salida}}">
        </div>
        <div class="form-group">
          <label for="stock">Stok</label>
          <input name="stock" type="number" class="form-control" id="stock" value="{{$inventario->stock}}">
        </div>
        <div class="form-group">
          <label for="nombre_inventario">nombre inventario</label>
          <input type="text" id="nombre_inventario" class="form-control" name="nombre" value="{{$inventario->nombre}}">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Actualizar</button>
          <a href="{{ route('inventario.registrados' ) }}" class="btn btn-secondary">Ver Registrados</a>
        </div>
      </form>
    </div>

@endsection